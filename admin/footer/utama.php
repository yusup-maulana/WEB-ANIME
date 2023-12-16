<!DOCTYPE html>
<html lang="en">
<?php
include("../navigasi.php");
include("../session.php");
authenticate('../');
?>
<script>
    const navSetAktif = document.getElementById("nav2");
    navSetAktif.classList.add('activeNav');
    navSetAktif.removeAttribute('href');
    const nav1 = document.getElementById("nav1");
    nav1.href = "../admin_utama.php";
    const nav3 = document.getElementById("nav3");
    nav3.href = "../medsos/utama.php";
    const nav4 = document.getElementById("nav4");
    nav4.href = "../logout.php";
</script>

<head>
    <title>Admin editor</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="language" content="indoensia">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="admin editor.">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@quilljs">
    <meta name="twitter:title" content="Full Editor - Quill">
    <meta name="twitter:description" content="Quill is a free, open source rich text editor built for the modern web.">
    <meta name="twitter:image" content="https://quilljs.com/assets/images/brand-asset.png">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://quilljs.com/standalone/full/">
    <meta property="og:image" content="https://quilljs.com/assets/images/brand-asset.png">
    <meta property="og:title" content="Full Editor - Quill">
    <meta property="og:site_name" content="Quill">
    <!-- <link rel="canonical" href="https://quilljs.com/standalone/full/"> -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/KaTeX/0.7.1/katex.min.css" />
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/styles/monokai-sublime.min.css" />
    <link rel="stylesheet" href="//cdn.quilljs.com/1.3.6/quill.snow.css" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        #editor-container {
            height: 350px;
        }

        #view {
            margin-top: 3em;
            padding: 1em;
        }

        .ql-editor[contenteditable=true] {
            background: #232526;
            background: -webkit-linear-gradient(to right, #414345, #232526);
            background: linear-gradient(to right, #414345, #232526);
        }
    </style>
    <style type="text/css">
        .pagination {
            display: inline-block;
            padding-left: 0;
            margin: 20px 0;
            border-radius: 4px
        }

        .pagination>li {
            display: inline
        }

        .pagination>li>a,
        .pagination>li>span {
            position: relative;
            float: left;
            padding: 6px 12px;
            line-height: 1.42857143;
            text-decoration: none;
            color: #428bca;
            background-color: #fff;
            border: 1px solid #ddd;
            margin-left: -1px
        }

        .pagination>li:first-child>a,
        .pagination>li:first-child>span {
            margin-left: 0;
            border-bottom-left-radius: 4px;
            border-top-left-radius: 4px
        }

        .pagination>li:last-child>a,
        .pagination>li:last-child>span {
            border-bottom-right-radius: 4px;
            border-top-right-radius: 4px
        }

        .pagination>li>a:hover,
        .pagination>li>span:hover,
        .pagination>li>a:focus,
        .pagination>li>span:focus {
            color: #2a6496;
            background-color: #eee;
            border-color: #ddd
        }

        .pagination>.active>a,
        .pagination>.active>span,
        .pagination>.active>a:hover,
        .pagination>.active>span:hover,
        .pagination>.active>a:focus,
        .pagination>.active>span:focus {
            z-index: 2;
            color: #fff;
            background-color: #428bca;
            border-color: #428bca;
            cursor: default
        }

        .pagination>.disabled>span,
        .pagination>.disabled>span:hover,
        .pagination>.disabled>span:focus,
        .pagination>.disabled>a,
        .pagination>.disabled>a:hover,
        .pagination>.disabled>a:focus {
            color: #999;
            background-color: #fff;
            border-color: #ddd;
            cursor: not-allowed
        }

        .pagination-lg>li>a,
        .pagination-lg>li>span {
            padding: 10px 16px;
            font-size: 18px
        }

        .pagination-lg>li:first-child>a,
        .pagination-lg>li:first-child>span {
            border-bottom-left-radius: 6px;
            border-top-left-radius: 6px
        }

        .pagination-lg>li:last-child>a,
        .pagination-lg>li:last-child>span {
            border-bottom-right-radius: 6px;
            border-top-right-radius: 6px
        }

        .pagination-sm>li>a,
        .pagination-sm>li>span {
            padding: 5px 10px;
            font-size: 12px
        }

        .pagination-sm>li:first-child>a,
        .pagination-sm>li:first-child>span {
            border-bottom-left-radius: 3px;
            border-top-left-radius: 3px
        }

        .pagination-sm>li:last-child>a,
        .pagination-sm>li:last-child>span {
            border-bottom-right-radius: 3px;
            border-top-right-radius: 3px
        }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body>
    <div class="form-group">
        <div class="container">
            <div class="row">
                <div class="col-2"> <input type="text" class="form-control" id="id" disabled></div>
                <div class="col-8"> <input type="text" class="form-control" id="nama" placeholder="Isikan Nama Link .." autocomplete="off"></div>
            </div>
        </div>

    </div>
    <div id="standalone-container">
        <div id="toolbar-container">
            <span class="ql-formats">
                <select class="ql-font"></select>
                <select class="ql-size"></select>
            </span>
            <span class="ql-formats">
                <button class="ql-bold"></button>
                <button class="ql-italic"></button>
                <button class="ql-underline"></button>
                <button class="ql-strike"></button>
            </span>
            <span class="ql-formats">
                <select class="ql-color"></select>
                <select class="ql-background"></select>
            </span>
            <span class="ql-formats">
                <button class="ql-script" value="sub"></button>
                <button class="ql-script" value="super"></button>
            </span>
            <span class="ql-formats">
                <button class="ql-header" value="1"></button>
                <button class="ql-header" value="2"></button>
                <button class="ql-blockquote"></button>
                <button class="ql-code-block"></button>
            </span>
            <span class="ql-formats">
                <button class="ql-list" value="ordered"></button>
                <button class="ql-list" value="bullet"></button>
                <button class="ql-indent" value="-1"></button>
                <button class="ql-indent" value="+1"></button>
            </span>
            <span class="ql-formats">
                <button class="ql-direction" value="rtl"></button>
                <select class="ql-align"></select>
            </span>
            <span class="ql-formats">
                <button class="ql-link"></button>
                <button class="ql-image"></button>
                <button class="ql-video"></button>
                <button class="ql-formula"></button>
            </span>
            <span class="ql-formats">
                <button class="ql-clean"></button>
            </span>
        </div>
        <div id="editor-container"></div>


        <div class="d-flex flex-row bd-highlight mb-3">
            <input type="hidden" id="action" name="action" value="insert">
            <div class="p-2 bd-highlight"><button class="btn btn-primary" id="btn-kirim">Simpan</button></div>
            <div class="p-2 bd-highlight"><button class="btn btn-secondary" id="btn-clear">Clear</button></div>
        </div>

    </div>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.1.2/styles/github.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.1.2/highlight.min.js"></script>
    <script charset="UTF-8" src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.1.2/languages/xml.min.js"></script>
    <!-- <script src="https://unpkg.com/quill@1.3.7/dist/quill.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/quill-html-edit-button@2.2.13/dist/quill.htmlEditButton.min.js" integrity="sha256-qgBU4fdiBbcilPrnc0NfdP+AKvpMYCJvN9fZSKz//JU=" crossorigin="anonymous"></script>

    <script src="//cdnjs.cloudflare.com/ajax/libs/KaTeX/0.7.1/katex.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
    <script src="//cdn.quilljs.com/1.3.6/quill.min.js"></script>
    <script>
        Quill.register("modules/htmlEditButton", htmlEditButton);

        var quill = new Quill('#editor-container', {
            modules: {
                syntax: true,
                toolbar: '#toolbar-container',
                htmlEditButton: {
                    debug: true, // logging, default:false
                    msg: "Edit the content in HTML format", //Custom message to display in the editor, default: Edit HTML here, when you click "OK" the quill editor's contents will be replaced
                    okText: "Ok", // Text to display in the OK button, default: Ok,
                    cancelText: "Cancel", // Text to display in the cancel button, default: Cancel
                    buttonHTML: "&lt;&gt;", // Text to display in the toolbar button, default: <>
                    buttonTitle: "Show HTML source", // Text to display as the tooltip for the toolbar button, default: Show HTML source
                    syntax: true, // Show the HTML with syntax highlighting. Requires highlightjs on window.hljs (similar to Quill itself), default: false
                    prependSelector: 'div#myelement', // a string used to select where you want to insert the overlayContainer, default: null (appends to body),
                    editorModules: {} // The default mod
                }
            },
            placeholder: 'Compose an epic...',
            theme: 'snow',
            htmlEditButton: {
                debug: true,
                syntax: true
            },

        });
        quill.format('color', 'white');
    </script>














    <div id="view">
        <input type="text" class="form-control" name="cari" id="cari" placeholder=" Cari ..">
        <table class="table table-sm">
            <thead>
                <tr>
                    <th width="10%">No</th>
                    <th width="20%">Id</th>
                    <th width="60%">Nama</th>
                    <th width="10%">Action</th>
                </tr>
            </thead>
            <tbody id="tbody">
            </tbody>
        </table>
        <ul id="pagination_isolated" class="pagination"></ul>
    </div>

</body>
<script>
    let action = document.getElementById('action');
    let txtID = document.getElementById('id');
    let nama = document.getElementById('nama');
    let btnkirim = document.getElementById('btn-kirim');
    let btnclear = document.getElementById('btn-clear');
    let cari = document.getElementById('cari');
    let btnEditList = document.querySelectorAll('.btnEdit');
    let btnHapusList = document.querySelectorAll('.btnHapus');


    async function init(currentPage, search) {
        const total = await fetchData(currentPage, search, 5);
        bind_paginasi(total, currentPage, 5);
        bind_paginasi_number(total, currentPage, 5);
    }
    init(1, cari.value);

    async function fetchData(page_number, search, itemsPerPage) {
        try {
            const url = 'action.php';
            const data = new URLSearchParams();
            data.append('page', page_number);
            data.append('search', search);
            data.append('action', 'fetch');
            data.append('itemsPerPage', itemsPerPage);
            const options = {
                method: 'POST',
                body: data,
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                }
            };
            const response = await fetch(url, options);
            const responseData = await response.json();
            // Penanganan Kesalahan di sini jika diperlukan
            btnkirim.innerHTML = 'Simpan';
            view.style.visibility = 'visible';
            const tbody = document.getElementById('tbody');
            tbody.innerHTML = '';
            const dataFromServer = responseData.hasil;
            dataFromServer.forEach(item => {
                const row = document.createElement('tr');
                row.innerHTML = `
                <td>${item.id}</td>
                <td>${item.id}</td>
                <td>${item.nama}</td>
                <td><button id="${item.id}" class="btn btn-warning btnEdit"><i class="bi bi-pencil-square"></i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
</svg></button> <button id="${item.id}" class="btn btn-danger btnHapus"><i class="bi bi-trash3"></i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
  <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
</svg></button>
                </td>`;
                tbody.appendChild(row);
            });
            const totalitem2 = responseData.totalitem;
            const totalPages = Math.ceil(totalitem2[0].totalitem / itemsPerPage);
            init_paginasi(totalPages, page_number);
            tambahkanEventListener();
            // Kembalikan nilai totalPages di sini
            return totalPages;
        } catch (error) {
            // Tangani kesalahan jika ada
            console.error('Kesalahan pada fetch atau JSON parsing:', error);
            // Kembalikan nilai undefined di sini
            return undefined;
        }
    }



    async function init_paginasi(totalPages, currentPage) {
        const paginationElement = document.getElementById('pagination_isolated');
        // const paginationElement = $("#pagination_isolated");
        let paginationHTML = "";
        paginationHTML += `<li><a href="#" class="pageLink">First</a></li>`;
        paginationHTML += `<li><a href="#" class="pageLink">«</a></li>`;
        // Batasi tampilan hanya hingga 5 nomor halaman
        const maxPagesToShow = 5;
        let startPage = Math.max(1, currentPage - Math.floor(maxPagesToShow / 2));
        let endPage = Math.min(totalPages, startPage + maxPagesToShow - 1);
        // Pastikan jumlah halaman yang ditampilkan tetap sesuai dengan maxPagesToShow
        if (endPage - startPage + 1 < maxPagesToShow) {
            startPage = Math.max(1, endPage - maxPagesToShow + 1);
        }
        for (let page = startPage; page <= endPage; page++) {
            paginationHTML += `<li><a href="#" class="pageNUM">${page}</a></li>`;
        }
        paginationHTML += `<li><a href="#" class="pageLink">»</a></li>`;
        paginationHTML += `<li><a href="#" class="pageLink">Last</a></li>`;
        paginationElement.innerHTML = paginationHTML;
        aktifPage(currentPage);
    }

    async function bind_paginasi(totalPages, currentPage2, itemsPerPage) {
        const paginationElement = document.getElementById('pagination_isolated');
        if (paginationElement) {
            paginationElement.removeEventListener('click', handlePageLinkClick);
            paginationElement.addEventListener('click', handlePageLinkClick);
            async function handlePageLinkClick(event) {
                event.preventDefault();
                const currentPageElement = paginationElement.querySelector('.active a');
                const currentPage = parseInt(currentPageElement.textContent);
                let nextPage;
                if (event.target.classList.contains('pageLink') && event.target.textContent === '»') {
                    nextPage = currentPage + 1;
                } else if (event.target.classList.contains('pageLink') && event.target.textContent === '«') {
                    nextPage = currentPage - 1;
                } else if (event.target.classList.contains('pageLink') && event.target.textContent === 'First') {
                    nextPage = 1;
                } else if (event.target.classList.contains('pageLink') && event.target.textContent === 'Last') {
                    nextPage = totalPages;
                }
                if (nextPage < 1 || nextPage > totalPages) {} else {
                    await fetchData(nextPage, cari.value, itemsPerPage, totalPages);
                }
            }
        }
    }

    function bind_paginasi_number(totalPages, currentPage, itemsPerPage) {
        const paginationElement = document.getElementById('pagination_isolated');
        if (paginationElement) {
            paginationElement.removeEventListener('click', handlePageNUMClick);
            paginationElement.addEventListener('click', handlePageNUMClick);
            async function handlePageNUMClick(event) {
                event.preventDefault();
                if (event.target.classList.contains('pageNUM')) {
                    const page = parseInt(event.target.textContent);
                    await fetchData(page, cari.value, itemsPerPage, totalPages);
                }
            }
        }
    }

    function aktifPage(currentPage) {
        // Menghapus kelas "active" dari elemen parent semua elemen dengan kelas "pageNUM"
        var pageNUMElements = document.querySelectorAll('.pageNUM');
        for (var i = 0; i < pageNUMElements.length; i++) {
            pageNUMElements[i].parentNode.classList.remove('active');
        }
        // Menambahkan kelas "active" pada elemen parent yang memiliki teks yang sama dengan currentPage
        for (var i = 0; i < pageNUMElements.length; i++) {
            if (parseInt(pageNUMElements[i].innerText) === currentPage) {
                pageNUMElements[i].parentNode.classList.add('active');
                break; // Hentikan loop setelah menemukan dan menandai halaman yang aktif
            }
        }
    }




    btnkirim.addEventListener('click', function() {
        btnkirim.innerHTML = 'Mengirim...';
        btnkirim.setAttribute('disabled', 'disabled');
        let txtaction = action.value;
        let txtid = txtID.value;
        let txtnama = nama.value;
        let isiEditor = quill.root.innerHTML;
        // Lakukan sesuatu dengan nilai yang diperoleh
        if (txtnama === "" || txtnama === null || txtnama === undefined) {
            alert("Nama tidak boleh kosong");
            btnkirim.removeAttribute('disabled');
            btnkirim.innerHTML = 'Simpan';
        } else if (isiEditor === "<p><br></p>") {
            alert("Isian editor tidak boleh kosong");
            btnkirim.removeAttribute('disabled');
            btnkirim.innerHTML = 'Simpan';
        } else {
            const url = "action.php";
            const data = new URLSearchParams();
            data.append('action', txtaction);
            data.append('id', txtid);
            data.append('nama', txtnama);
            data.append('ket', isiEditor);
            const option = {
                method: 'POST',
                body: data,
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                }
            }
            fetch(url, option)
                .then(response => response.json())
                .then(data => {
                    console.log(data);
                    Swal.fire({
                        position: "top-end",
                        icon: data.icon,
                        title: data.title,
                        showConfirmButton: false,
                        timer: 1500
                    });
                    btnkirim.removeAttribute('disabled');
                    btnkirim.innerHTML = 'Simpan';
                    const currentPage = parseInt(document.getElementById('pagination_isolated').querySelector('.active a').textContent);
                    init(currentPage, cari.value);
                    reset();
                })
                .catch(error => {
                    alert(error);
                })
        }
    });

    btnclear.addEventListener('click', function() {
        reset();
        init(1, cari.value);
        quill.format('color', 'white');
    });

    function reset() {
        id.value = "";
        nama.value = "";
        quill.root.innerHTML = "";
        action.value = 'insert';
        btnkirim.innerHTML = 'Simpan';
        cari.value = "";
    }

    cari.addEventListener('keyup', function() {
        init(1, cari.value);
    });

    function tambahkanEventListener() {
        // Mendapatkan semua elemen dengan kelas 'btnEdit'
        let btnEditList = document.querySelectorAll('.btnEdit');
        // Menambahkan event listener untuk setiap tombol edit
        btnEditList.forEach(function(btnEdit) {
            btnEdit.addEventListener('click', async function() {
                let id = this.id;
                let isiEditor = quill.root.innerHTML;
                const url = 'action.php';
                let data = new URLSearchParams();
                data.append('action', 'data');
                data.append('id', id);
                let option = {
                    method: 'POST',
                    body: data,
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded'
                    }
                }
                try {
                    let response = await fetch(url, option);
                    let responseData = await response.json();
                    txtID.value = responseData.data.id;
                    nama.value = responseData.data.nama;
                    quill.root.innerHTML = responseData.data.ket;
                    action.value = 'update';
                    btnkirim.innerText = 'Update';
                } catch (error) {
                    console.log(error);
                }
            });
        });
        // Mendapatkan semua elemen dengan kelas 'btnHapus'
        let btnHapusList = document.querySelectorAll('.btnHapus');
        // Menambahkan event listener untuk setiap tombol hapus
        btnHapusList.forEach(function(btnHapus) {
            btnHapus.addEventListener('click', async function() {
                let id = this.id;
                const url = 'action.php';
                let data = new URLSearchParams();
                data.append('id', id);
                data.append('action', 'hapus');
                const options = { // perbaiki dari 'option' menjadi 'options'
                    method: 'POST',
                    body: data,
                    headers: { // perbaiki dari 'header' menjadi 'headers'
                        "Content-Type": "application/x-www-form-urlencoded"
                    }
                }
                Swal.fire({
                    title: "Are you sure?",
                    text: "You won't be able to revert this!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Yes, delete it!"
                }).then((result) => {
                    if (result.isConfirmed) {
                        hapus(url, options)
                    }
                });
            });
        });
    }

    async function hapus(url, options) {
        const response = await fetch(url, options); // perbaiki dari 'fecth' menjadi 'fetch'
        const responseData = await response.json();
        try {

            Swal.fire({
                position: "top-end",
                icon: responseData.icon,
                title: responseData.title,
                showConfirmButton: false,
                timer: 1500
            });
            init(1, cari.value);
        } catch (error) {
            console.error('Error:', error);
        }
    }
</script>

</html>