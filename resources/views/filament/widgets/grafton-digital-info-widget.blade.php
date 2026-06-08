@php
    $appVersion = cache()
                ->rememberForever('app_version', fn () => trim(
                    Process::run('git describe --tags --abbrev=0 || git rev-parse HEAD')->output()
                ));
@endphp

<x-filament-widgets::widget class="fi-filament-info-widget">
    <x-filament::section>
        <div class="fi-filament-info-widget-main">
            <span class="font-bold">CMS from Grafton Digital</span>

            <p class="mt-1 text-xs text-gray-500 dark:text-gray-400">
                {{ $appVersion }}
            </p>
        </div>

        <div class="fi-filament-info-widget-links">
            <x-filament::link
                color="gray"
                href="https://graftondigital.com"
                icon="heroicon-o-globe-alt"
                target="_blank"
            >
                Main Site
            </x-filament::link>

            <x-filament::link
                color="gray"
                href="mailto:help@graftondigital.com"
                icon="heroicon-o-envelope"
                target="_blank"
            >
                Technical Support
            </x-filament::link>
        </div>
    </x-filament::section>
</x-filament-widgets::widget>
