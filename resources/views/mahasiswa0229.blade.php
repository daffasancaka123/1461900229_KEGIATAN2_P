<head>
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Data Mahasiswa</title>
<style>
table {
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
    border: 1px solid #ddd;
    }
    thead {
        background-color: #f2f2f2;
        }

    th, td {
        text-align: left;padding: 8px;
        }
        tr:nth-child(even){background-color: #f2f2f2}.tambah{padding: 8px 16px ;text-decoration: none;}</style></head>
        <body><div style="overflow-x:auto;">
        <a class="tambah" href="{{route( 'mahasiswa.create')}}">Tambah Data </a>
        <table><thead><tr><th>No</th><th>Nbi</th><th>Nama Mahasiswa</th><th>Aksi</th></tr></thead><tbody><?php $no=1; ?>@foreach ($mahasiswa as $mhs)<tr><td>{{$no++}}</td>
        <td>{{$mhs->nbi}}</td><td>{{$mhs->nama_mhs}}</td>

        {
            //
            }
            
    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */public function store(Request $request)
    {
        //
    }/
    *
    *
    * Display the specified resource.** @param  int  $id* @return \Illuminate\Http\Response*/public function show($id){//}/*** Show the form for editing the specified resource.** @param  int  $id* @return \Illuminate\Http\Response
    */public function edit($id){//}/*** Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id* @return \Illuminate\Http\Response
    */public function update(Request $request, $id){//}/
    *
    *
    * Remove the specified resource from storage.** @param  int  $id* @return \Illuminate\Http\Response
    */
    public function destroy($id)
    {
        //
    }
}