<style>
    .spin-animation {
        display: inline-block;
        animation: spin 1s linear infinite;
    }


    @keyframes spin {
        from {
            transform: rotate(0deg);
        }

        to {
            transform: rotate(360deg);
        }
    }

    .select2-container--default .select2-results__option {
        color: black;
        /* or any visible color */
        background-color: white;
        /* optional, to ensure contrast */
    }

    .cke_notifications_area {
        display: none !important;
    }

    .dt-search {
        float: right;
        margin-bottom: 10px;
    }

    .dt-length {
        display: none;
    }

    .btn-insoft {
        width: 10px;
        height: 10px;
        padding: 16px;
    }

    .btn-warning {
        background: orange
    }

    .btn-success {
        background: green
    }

    .btn-danger {
        background: red
    }

    .icon-insoft {
        position: relative;
        top: -8px;
        right: 6px;
        font-size: 12px;
    }

    .be-poster {
        width: 100px !important;
        height: 110px !important;
        object-fit: cover !important;
        border-radius: 5px;
        border: 2px solid white;
        cursor: pointer;
    }

    .table-list th,
    td {
        min-width: 100px !important;
        max-width: 300px !important;

    }
</style>
