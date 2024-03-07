
<div class="w-full content-center">

    <div class="w-full my-10">
        <div class="mx-auto">
            <a href="{{ route('business.show', ['id' => $businessId])}}" class="mx-auto text-white">
                <center>
                    <svg width="50" height="51" viewBox="0 0 30 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15.0015 0C14.1414 0 13.2957 0.0716471 12.4731 0.214941C5.40083 1.41929 0 7.59459 0 15.0015C0 19.822 2.28588 24.1212 5.83412 26.8677C2.47694 27.202 0.177412 27.8844 0.177412 28.6759C0.177412 29.7984 4.80036 30.7059 10.5014 30.7059C15.9466 30.7059 20.9789 29.7028 20.8698 28.7987C23.2618 27.7786 25.3324 26.158 26.8984 24.1212C28.8431 21.5931 30 18.43 30 15.0015C29.9997 6.73141 23.2682 0 15.0015 0ZM21.8831 26.2979C20.9312 26.5026 19.9452 26.6118 18.9319 26.6118C11.2077 26.6118 4.94365 20.3478 4.94365 12.6235C4.94365 9.21177 6.16506 6.08318 8.19847 3.654C10.1875 2.45306 12.5178 1.76388 15.0015 1.76388C22.2993 1.76388 28.2354 7.70036 28.2354 15.0015C28.2358 19.778 25.6906 23.9745 21.8831 26.2979Z" fill="#ffffff"/>
                    </svg>
                </center>

            </a>
        </div>
    </div>

    <div class="">
x
        <x-mary-menu class="text-white">
            <x-mary-menu-separator title="Menu" />
            <x-mary-menu-sub href="/" title="Dashboard" icon="m-chart-bar">
                <x-mary-menu-item title="Overview" href="{{ route('business.show', ['id' => $businessId])}}"/>
                <x-mary-menu-item title="Sales" href="{{ route('business.page.sales', ['id' => $businessId])}}"/>
                <x-mary-menu-item title="Marketing" href="{{ route('business.page.marketing', ['id' => $businessId])}}"/>
            </x-mary-menu-sub>

            <x-mary-menu-sub title="Products" icon="m-shopping-cart">
                <x-mary-menu-item title="Manage Products" href="{{ route('business.page.products', ['id' => $businessId])}}"/>
                <x-mary-menu-item title="Performance"/>
            </x-mary-menu-sub>

            <x-mary-menu-item title="Team" icon="s-users" href="{{ route('business.page.team', ['id' => $businessId])}}"/>
            <x-mary-menu-item title="Profile" icon="s-user" href="{{ route('business.page.profile', ['id' => $businessId])}}"/>
            <x-mary-menu-item title="Messages" icon="s-envelope" badge="" href="{{ route('business.page.messages', ['id' => $businessId])}}"/>

            {{-- Simple separator --}}
            <x-mary-menu-separator />

            {{-- Submenu --}}
            <x-mary-menu-sub title="Settings" icon="o-cog-6-tooth">
                <x-mary-menu-item title="Integrations" href="{{ route('business.page.integrations', ['id' => $businessId]) }}"/>
                <x-mary-menu-item title="Social Media"/>
                <x-mary-menu-item title="Notifications"/>
                <x-mary-menu-item title="Security"/>
                <x-mary-menu-item title="Settings"/>
            </x-mary-menu-sub>

            <x-mary-menu-item title="Support" icon="o-lifebuoy"/>
            <x-mary-menu-item href="{{ route('home') }}" title="Back Home" icon="o-arrow-left" />
        </x-mary-menu>

    </div>


</div>
