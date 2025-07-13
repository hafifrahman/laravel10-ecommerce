const initDataTable = (table) => {
  $(table).DataTable({
    autoWidth: false,
    scrollX: true,
    language: {
      decimal: '',
      emptyTable: 'Tidak ada data tersedia di tabel',
      info: 'Menampilkan _START_ hingga _END_ dari _TOTAL_ entri',
      infoEmpty: 'Menampilkan 0 hingga 0 dari 0 entri',
      infoFiltered: '(disaring dari _MAX_ total entri)',
      infoPostFix: '',
      thousands: ',',
      lengthMenu: 'Tampilkan _MENU_ entri',
      loadingRecords: 'Memuat...',
      processing: 'Sedang memproses...',
      search: 'Cari:',
      zeroRecords: 'Tidak ada hasil yang cocok ditemukan',
      paginate: {
        first: 'Pertama',
        last: 'Terakhir',
        next: "<span aria-hidden='true'>&raquo;</span>",
        previous: "<span aria-hidden='true'>&laquo;</span>",
      },
      aria: {
        sortAscending: ': aktifkan untuk mengurutkan kolom secara ascending',
        sortDescending: ': aktifkan untuk mengurutkan kolom secara descending',
      },
    },
  });
};

export default initDataTable;
