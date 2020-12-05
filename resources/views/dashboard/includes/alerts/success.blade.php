@if(Session::has('success'))

    <vs-alert color="success" title="Success" active="true">
        {{ Session::get('success')  }}
    </vs-alert>


@endif


