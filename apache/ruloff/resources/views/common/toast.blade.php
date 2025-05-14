<div id="toast-container"></div>

@if(session('toast_message'))
    <script type="module">
        const toastData = @json(session('toast_message'));
        showToast(toastData.message, toastData.type);
    </script>
@endif
