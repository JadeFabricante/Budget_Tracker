</main>
</div>
<style>
    /* Styling for the pagination buttons */
    .dataTables_wrapper .dataTables_paginate {
        text-align: center; /* Center the pagination */
        margin-top: 10px; /* Add some spacing */
    }
    
    .dataTables_wrapper .dataTables_paginate .paginate_button {
        display: inline-block; /* Make buttons inline */
        border: 1px solid #ced4da; /* Border to make it look like a button */
        border-radius: 5px; /* Rounded corners */
        padding: 8px 16px; /* Larger padding for button appearance */
        margin: 0 5px; /* Add horizontal spacing between buttons */
        font-size: 16px; /* Larger font size for better readability */
        font-weight: bold; /* Bold text for clarity */
        background-color: #f8f9fa; /* Light background color */
        color: #495057; /* Dark text color */
        transition: background-color 0.3s ease, transform 0.3s ease; /* Transition for background and hover */
        text-decoration: none; /* Remove link-style underline */
        cursor: pointer; /* Make it feel like a clickable button */
    }
    
    .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
        background-color: #007bff; /* Blue background on hover */
        color: #fff; /* White text */
        transform: translateY(-2px); /* Slight lift effect */
    }
    
    .dataTables_wrapper .dataTables_paginate .paginate_button.current {
        background-color: #007bff; /* Blue background for the current page */
        color: #fff; /* White text */
        font-weight: bold;
        border: 1px solid #007bff; /* Border same color as background */
        box-shadow: 0 2px 6px rgba(0, 123, 255, 0.2); /* Slight shadow for emphasis */
    }
    
</style>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function() {
        $('.admin-table').DataTable({
            responsive: true,
            language: {
                search: "Search:",
                lengthMenu: "Display _MENU_ entries per page",
                info: "Showing _START_ to _END_ of _TOTAL_ entries",
                paginate: {
                    first: "First",
                    last: "Last",
                    next: "Next",
                    previous: "Previous"
                }
            }
        });
    });
</script>
</body>
</html>
