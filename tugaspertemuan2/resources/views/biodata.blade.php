<x-header />
<div style="min-height: 90vh; background: linear-gradient(135deg, #f8fafb 0%, #f1f5f9 100%); display: flex; flex-direction: column; align-items: center; justify-content: flex-start; padding-top: 4em; font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;">
    <div style="background: #fff; border-radius: 12px; box-shadow: 0 10px 40px rgba(0,0,0,0.08), 0 2px 8px rgba(0,0,0,0.04); padding: 3em 2.5em; max-width: 650px; width: 100%; display: flex; gap:2.5em; align-items: flex-start; border: 1px solid rgba(0,0,0,0.06);">
        <!-- Foto Profil -->
        <div>
            <img src="{{ asset('images/1000015941.jpg') }}" alt="Foto Profil" style="width:130px; height:130px; object-fit:cover; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,115,170,0.15); border: 3px solid #fff;">
        </div>
        <!-- Tabel Biodata -->
        <table cellpadding="12" style="border-collapse: collapse; min-width: 320px; background: #fafbfc; font-size:1rem; box-shadow:0 2px 8px rgba(0,0,0,0.06); border-radius:8px; overflow:hidden; border: 1px solid #d4d4d4;">
            <tr>
                <th colspan="2" style="background: linear-gradient(135deg, #0073aa 0%, #005177 100%); color: #fff; font-size: 1.1em; font-weight:600; padding:1em; text-align:center; border-bottom: 1px solid #333;">Biodata Diri</th>
            </tr>
            <tr style="border-bottom: 1px solid #d4d4d4;">
                <td style="font-weight:600; color:#2c3e50; background:#f8fafb; border-right: 1px solid #d4d4d4;">Nama</td>
                <td style="color:#5a6c7d;">{{ $Nama }}</td>
            </tr>
            <tr style="border-bottom: 1px solid #d4d4d4;">
                <td style="font-weight:600; color:#2c3e50; background:#f8fafb; border-right: 1px solid #d4d4d4;">Kelas</td>
                <td style="color:#5a6c7d;">{{ $Kelas }}</td>
            </tr>
            <tr style="border-bottom: 1px solid #d4d4d4;">
                <td style="font-weight:600; color:#2c3e50; background:#f8fafb; border-right: 1px solid #d4d4d4;">NIM</td>
                <td style="color:#5a6c7d;">{{ $NIM }}</td>
            </tr>
            <tr style="border-bottom: 1px solid #d4d4d4;">
                <td style="font-weight:600; color:#2c3e50; background:#f8fafb; border-right: 1px solid #d4d4d4;">Jurusan</td>
                <td style="color:#5a6c7d;">{{ $Jurusan }}</td>
            </tr>
            <tr style="border-bottom: 1px solid #d4d4d4;">
                <td style="font-weight:600; color:#2c3e50; background:#f8fafb; border-right: 1px solid #d4d4d4;">Umur</td>
                <td style="color:#5a6c7d;">{{ $Umur }}</td>
            </tr>
            <tr style="border-bottom: 1px solid #d4d4d4;">
                <td style="font-weight:600; color:#2c3e50; background:#f8fafb; border-right: 1px solid #d4d4d4;">Hobi</td>
                <td style="color:#5a6c7d;">
                    <ul style="margin:0; padding-left: 1.2em; line-height:1.5;">
                        @foreach($Hobi as $hobi)
                            <li>{{ $hobi }}</li>
                        @endforeach
                    </ul>
                </td>
            </tr>
            <tr>
                <td style="font-weight:600; color:#2c3e50; background:#f8fafb; border-right: 1px solid #d4d4d4;">Jenis Kelamin</td>
                <td style="color:#5a6c7d;">{{ $Kelamin }}</td>
            </tr>
        </table>
    </div>
</div>
