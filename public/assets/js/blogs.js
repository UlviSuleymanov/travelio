$(document).ready(function() {

    $('.status-checkbox').change(function() {
        const isChecked = $(this).is(':checked');
        const blogId = $(this).closest('tr').find('td:first').text(); // Get the blog ID from the first column

        console.log("Hello")
        $.ajax({
            url: '/admin/blogs/' + blogId + '/status',
            method: 'POST',
            data: {
                status: isChecked ? 1 : 0, // Send 1 for checked, 0 for unchecked
                _token: '{{ csrf_token() }}' // Include CSRF token for protection
            },
            success: function(response) {
                if (response.success) {
                    alert('Status updated successfully!');
                } else {
                    alert('Error updating status: ' + response.message);
                }
            },
            error: function(xhr, status, error) {
                alert('An error occurred: ' + error);
            }
        });
    });
});
