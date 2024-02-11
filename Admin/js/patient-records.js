// Open and close modal
const Modal = document.querySelector("#modal");
const openModal = document.querySelector("#open-button");
const closeModal = document.querySelector("#close-button");

openModal.addEventListener('click', () => {
    Modal.showModal();
});

closeModal.addEventListener('click', () => {
    Modal.close();
});

// Confirm deletions

const deleteButtons = document.querySelectorAll('#btn-delete');
const editButtons = document.querySelectorAll('#btn-edit');

deleteButtons.forEach((btn) => {
    btn.addEventListener('click', () => {
        const deleteId = btn.getAttribute('data-deleteid');
        Swal.fire({
            title: 'Are you sure you want to delete?',
            icon: 'question',
            showCancelButton: true,
            confirmButtonText: 'Yes',
            cancelButtonText: 'No',
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = `php-records/delete-records.php?deleteid=${deleteId}`;
            }
        });
    });
});

editButtons.forEach((btn) => {
    btn.addEventListener('click', () => {
        const patient_detID = btn.parentElement.parentElement.querySelector('a').textContent;
        window.location.href = `edit-p.php?updateid=${patient_detID}`;
    });
});

// Confirm deletion of a user
const deleteUserButton = document.querySelector(".del");

deleteUserButton.addEventListener("click", function() {
    Swal.fire({
        title: 'Are you sure you want to delete?',
        icon: 'question',
        showCancelButton: true,
        confirmButtonText: 'Yes',
        cancelButtonText: 'No',
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = `php/delete-user.php?id=<?php echo $row['userID']?>`;
        }
    });
});







