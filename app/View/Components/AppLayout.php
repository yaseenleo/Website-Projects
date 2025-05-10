<?php

namespace App\View\Components;

use Illuminate\Support\Str;
use Illuminate\View\Component;
use Illuminate\View\View;
use Illuminate\Support\Facades\Cache;

class AppLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
        $fonts = Cache::rememberForever('fonts', function () {
            if (file_exists(public_path('assets/fonts/fonts.css'))) {

                $trimFonts = trim(
                    preg_replace(
                        '/\s\s+/',
                        ' ',
                        file_get_contents(
                            public_path('assets/fonts/fonts.css')
                        )
                    )
                );

                if (config('app.env') === 'production') {
                    $trimFonts = Str::replace(
                        '/assets',
                        config('app.asset_url') . '/assets',
                        $trimFonts
                    );
                }

                return $trimFonts;
            }
        });

        return view('frontend.layouts.app')
            ->withFonts($fonts);
    }
}
