<?php
$files = glob('files/*');
?>

<style>
    table {
        width: 100%;
        border-collapse: collapse;
    }

    th,
    td {
        padding: 10px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: #f2f2f2;
    }

    .actions {
        white-space: nowrap;
    }

    .actions button {
        padding: 5px 10px;
        margin-right: 5px;
        cursor: pointer;
        border: none;
        border-radius: 3px;
        background-color: #007bff;
        color: #fff;
        transition: background-color 0.3s ease;
    }

    .actions button:hover {
        background-color: #0056b3;
    }

    .actions form {
        display: inline;
        margin: 0;
    }

    .actions input[type="text"] {
        padding: 5px;
        margin-right: 5px;
        border: 1px solid #ccc;
        border-radius: 3px;
    }

    /* Popup style */
    .popup {
        display: none;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: #fff;
        border: 1px solid #ccc;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        z-index: 1000;
    }
    a.viewLink{
        text-decoration: none;
        color: white;
    }
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

<table>
    <thead>
        <tr>
            <th>Filename</th>
            <th>Filetype</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($files as $file): ?>
            <tr>
                <td>
                    <?php echo basename($file); ?>
                </td>
                <td>
                    <?php echo pathinfo($file, PATHINFO_EXTENSION); ?>
                </td>
                <td class="actions">
                    <button onclick="showPopup('delete_<?php echo $file; ?>')"><i class="fa fa-trash"></i> Delete</button>
                    <button onclick="showPopup('rename_<?php echo $file; ?>')"><i class="fa fa-pencil"></i> Rename</button>
                    <button><a class="viewLink" href="view.php?file=<?php echo urlencode($file); ?>" target="_blank"><i
                                class="fa fa-eye"></i> View</a>
                    </button>
                    <!-- Delete Popup -->
                    <div id="delete_<?php echo $file; ?>" class="popup">
                        <form action="actions.php" method="post">
                            <input type="hidden" name="fileToDelete" value="<?php echo $file; ?>">
                            <p>Are you sure you want to delete this file?</p>
                            <button type="submit" name="delete">Confirm</button>
                            <button type="button" onclick="hidePopup('delete_<?php echo $file; ?>')">Cancel</button>
                        </form>
                    </div>

                    <!-- Rename Popup -->
                    <div id="rename_<?php echo $file; ?>" class="popup">
                        <form action="actions.php" method="post">
                            <input type="hidden" name="oldFileName" value="<?php echo $file; ?>">
                            <p>Enter new name:</p>
                            <input type="text" name="newFileName" placeholder="New Name">
                            <button type="submit" name="rename">Confirm</button>
                            <button type="button" onclick="hidePopup('rename_<?php echo $file; ?>')">Cancel</button>
                        </form>
                    </div>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<script src="https://code.jquery.com/jquery-3.7.1.slim.js"
    integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc=" crossorigin="anonymous"></script>
<script>
    // Function to show popup
    function showPopup(id) {
        $('#' + escapeSelector(id)).show();
    }

    // Function to hide popup
    function hidePopup(id) {
        $('#' + escapeSelector(id)).hide();
    }

    // Function to escape special characters in selector
    function escapeSelector(selector) {
        return selector.replace(/[!"#$%&'()*+,.\/:;<=>?@[\\\]^`{|}~]/g, '\\$&');
    }
</script>