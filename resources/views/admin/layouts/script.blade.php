<!-- base:js -->
<script src="{{ url('/admin/assets/vendors/js/vendor.bundle.base.js') }}"></script>
<script src="{{ url('/admin/assets/js/off-canvas.js') }}"></script>
<script src="{{ url('/admin/assets/js/hoverable-collapse.js') }}"></script>
<script src="{{ url('/admin/assets/js/template.js') }}"></script>
<script src="{{ url('/admin/assets/js/settings.js') }}"></script>
<script src="{{ url('/admin/assets/js/todolist.js') }}"></script>
<script>
    @if (session()->has('success'))
        {
            Swal.fire({
                title: "Good job!",
                text: "{{ session()->get('success') }}",
                icon: "success"
            });
        }

        function confirmUpdate(element,event,title='Do you want to save the changes?',confirmBt='Save', denyBtn='Don`t save'){
            event.preventDefault();

            Swal.fire({
                title: title,
                showDenyButton: true,
                showCancelButton: true,
                confirmButtonText: confirmBt,
                denyButtonText: denyBtn
                }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) 
                {
                    element.submit();

                } else if (result.isDenied)
                {
                    Swal.fire("Changes are not saved", "", "info");
                }
            });
        }
    @endif
</script>
<!-- endinject -->