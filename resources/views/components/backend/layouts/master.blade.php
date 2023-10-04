<!DOCTYPE html>
<html lang="en">
<x-backend.layouts.partial.head/>

<body>
<x-backend.layouts.partial.navbar/>

    <div class="page-content">
<x-backend.layouts.partial.sidebar/>

        <div class="content-wrapper">
            <x-backend.layouts.partial.page_header/>
            <div class="content">
                {{ $slot }}
            </div>
            <x-backend.layouts.partial.footer/>
        </div>
    </div>
</body>

</html>
