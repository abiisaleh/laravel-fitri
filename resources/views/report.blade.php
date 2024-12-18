<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>

    <style>
        @page {
            margin-top: 200px;
        }

        .header {
            position: fixed;
            top: -150px;
        }

        table {
            width: 100%;
        }

        .table thead th {
            text-transform: uppercase;
            text-align: left;
        }

        .table tfoot {
            text-transform: uppercase;
            text-align: right;
        }

        .table tr {
            border-top: 2px solid black;
        }

        .table tr td {
            padding: 8px 0;
        }

        .table tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .bg-secondary {
            background-color: #f2f2f2;
        }

        footer {
            position: fixed;
            bottom: -25px;
            border-top: 2px solid;
            width: 100%;
            text-align: right;
        }

        .pagenum::before {
            content: counter(page);
        }

        .text-center {
            text-align: center;
        }

        .my-0 {
            margin-top: 0;
            margin-bottom: 0;
        }
    </style>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.4/tailwind.min.css">
</head>

<body>
    {{-- kop surat --}}
    @php
        $kontak = \App\Models\site::where('title', 'kontak')->first()->content ?? '';
    @endphp
    <table class="header">
        <td>
            <img src="assets/img/logo-al-fitroh.jpg" alt="logo" width="80">
        </td>
        <td class="text-center">
            <h3 class="my-0">LKSA (LEMBAGA KESEJAHTERAAN SOSIAL ANAK)</h3>
            <h1 class="my-0">“AL-FITROH”</h1>
            <p class="my-0">JL.Brawijaya Gg. III No. 12, Kota Sukabumi <br>Telp.: {{ $kontak['telp'] }}Email:
                {{ $kontak['email'] }}
            </p>
        </td>
    </table>

    <main>
        <div class="mb-8 text-center">
            <h1 class="text-xl font-bold my-0">{{ $title }}</h1>
            <p style="margin-top: 0">{{ $subtitle }}</p>
        </div>

        <table class="table mb-8">
            <thead>
                @foreach ($cols as $col => $value)
                    <th class="px-2">{{ $col }}</th>
                @endforeach
            </thead>
            <tbody>
                @forelse ($records as $record)
                    <tr>
                        @foreach ($cols as $value)
                            @switch($value)
                                @case('nominal')
                                    <td class="text-right">{{ number_format(data_get($record, $value)) }}</td>
                                @break

                                @default
                                    <td>{{ data_get($record, $value) }}</td>
                            @endswitch
                        @endforeach
                    </tr>
                    @empty
                        <tr>
                            <td colspan="{{ count($cols) }}" class="text-center">Tidak ada data yang ditemukan</td>
                        </tr>
                    @endforelse
                </tbody>
                <tfoot class="font-bold">
                    <tr>
                        <td colspan="{{ count($cols) - 1 }}">Total</td>
                        <td>{{ number_format($total) }}</td>
                    </tr>
                </tfoot>
            </table>
        </main>

        <footer>
            <p>
                Halaman
                <span class="pagenum"></span>
            </p>
        </footer>
    </body>

    </html>
