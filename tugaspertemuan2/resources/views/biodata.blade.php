<x-header />
<div style="min-height: 90vh; background: linear-gradient(135deg, #f8fafb 0%, #f1f5f9 100%); padding: 2em 1em; font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;">
    
    <!-- Header Section -->
    <div style="text-align: center; margin-bottom: 3em;">
        <h1 style="font-size: 2.5rem; color: #2c3e50; margin-bottom: 0.5em; font-weight: 700;">Biodata Diri</h1>
        <p style="font-size: 1.1rem; color: #5a6c7d;">Informasi lengkap profil personal dan akademik</p>
    </div>

    <!-- Main Content -->
    <div style="max-width: 900px; margin: 0 auto; display: flex; gap: 3em; align-items: flex-start; flex-wrap: wrap;">
        
        <!-- Foto Profil Section -->
        <div style="background: #fff; border-radius: 12px; box-shadow: 0 8px 32px rgba(0,0,0,0.1); padding: 2em; text-align: center; flex: 1; min-width: 280px;">
            <img src="{{ asset('images/FotoFormal.jpg') }}" alt="Foto Profil" style="width: 180px; height: 180px; object-fit: cover; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,115,170,0.15); border: 3px solid #fff; margin-bottom: 1em;">
            <h2 style="font-size: 1.4rem; color: #2c3e50; margin-bottom: 0.5em; font-weight: 600;">{{ $Nama }}</h2>
            <p style="color: #0073aa; font-weight: 500; font-size: 1rem;">{{ $Jurusan }}</p>
            <p style="color: #5a6c7d; font-size: 0.95rem;">NIM: {{ $NIM }}</p>
        </div>

        <!-- Tabel Biodata Section -->
        <div style="flex: 2; min-width: 400px;">
            <table cellpadding="15" style="width: 100%; border-collapse: collapse; background: #fff; font-size: 1rem; box-shadow: 0 8px 32px rgba(0,0,0,0.1); border-radius: 12px; overflow: hidden; border: 1px solid #e1e8ed;">
                <tr>
                    <th colspan="2" style="background: linear-gradient(135deg, #0073aa 0%, #005177 100%); color: #fff; font-size: 1.2em; font-weight: 600; padding: 1.2em; text-align: center;">BIODATA LENGKAP</th>
                </tr>
                <tr style="border-bottom: 1px solid #e1e8ed;">
                    <td style="font-weight: 600; color: #2c3e50; background: #f8fafb; border-right: 1px solid #e1e8ed; width: 40%;">Nama Lengkap</td>
                    <td style="color: #5a6c7d;">{{ $Nama }}</td>
                </tr>
                <tr style="border-bottom: 1px solid #e1e8ed;">
                    <td style="font-weight: 600; color: #2c3e50; background: #f8fafb; border-right: 1px solid #e1e8ed;">Tempat, Tanggal Lahir</td>
                    <td style="color: #5a6c7d;">{{ $TempatLahir }}</td>
                </tr>
                <tr style="border-bottom: 1px solid #e1e8ed;">
                    <td style="font-weight: 600; color: #2c3e50; background: #f8fafb; border-right: 1px solid #e1e8ed;">Jenis Kelamin</td>
                    <td style="color: #5a6c7d;">{{ $Kelamin }}</td>
                </tr>
                <tr style="border-bottom: 1px solid #e1e8ed;">
                    <td style="font-weight: 600; color: #2c3e50; background: #f8fafb; border-right: 1px solid #e1e8ed;">Agama</td>
                    <td style="color: #5a6c7d;">{{ $Agama }}</td>
                </tr>
                <tr style="border-bottom: 1px solid #e1e8ed;">
                    <td style="font-weight: 600; color: #2c3e50; background: #f8fafb; border-right: 1px solid #e1e8ed;">Status</td>
                    <td style="color: #5a6c7d;">{{ $Status }}</td>
                </tr>
                <tr style="border-bottom: 1px solid #e1e8ed;">
                    <td style="font-weight: 600; color: #2c3e50; background: #f8fafb; border-right: 1px solid #e1e8ed;">Alamat</td>
                    <td style="color: #5a6c7d;">{{ $Alamat }}</td>
                </tr>
                <tr style="border-bottom: 1px solid #e1e8ed;">
                    <td style="font-weight: 600; color: #2c3e50; background: #f8fafb; border-right: 1px solid #e1e8ed;">Email</td>
                    <td style="color: #5a6c7d;">{{ $Email }}</td>
                </tr>
                <tr style="border-bottom: 1px solid #e1e8ed;">
                    <td style="font-weight: 600; color: #2c3e50; background: #f8fafb; border-right: 1px solid #e1e8ed;">No. HP</td>
                    <td style="color: #5a6c7d;">{{ $NoHP }}</td>
                </tr>
                <tr style="border-bottom: 1px solid #e1e8ed;">
                    <td style="font-weight: 600; color: #2c3e50; background: #f8fafb; border-right: 1px solid #e1e8ed;">Kelas</td>
                    <td style="color: #5a6c7d;">{{ $Kelas }}</td>
                </tr>
                <tr style="border-bottom: 1px solid #e1e8ed;">
                    <td style="font-weight: 600; color: #2c3e50; background: #f8fafb; border-right: 1px solid #e1e8ed;">Jurusan</td>
                    <td style="color: #5a6c7d;">{{ $Jurusan }}</td>
                </tr>
                <tr style="border-bottom: 1px solid #e1e8ed;">
                    <td style="font-weight: 600; color: #2c3e50; background: #f8fafb; border-right: 1px solid #e1e8ed;">Hobi</td>
                    <td style="color: #5a6c7d;">
                        <ul style="margin: 0; padding-left: 1.2em; line-height: 1.6;">
                            @foreach($Hobi as $hobi)
                                <li>{{ $hobi }}</li>
                            @endforeach
                        </ul>
                    </td>
                </tr>
                <tr style="border-bottom: 1px solid #e1e8ed;">
                    <td style="font-weight: 600; color: #2c3e50; background: #f8fafb; border-right: 1px solid #e1e8ed;">Cita-cita</td>
                    <td style="color: #5a6c7d;">{{ $CitaCita }}</td>
                </tr>
                <tr>
                    <td style="font-weight: 600; color: #2c3e50; background: #f8fafb; border-right: 1px solid #e1e8ed;">Motto Hidup</td>
                    <td style="color: #5a6c7d; font-style: italic; font-weight: 500;">"{{ $Motto }}"</td>
                </tr>
            </table>
        </div>
    </div>

    <!-- Quote Section -->
    <div style="text-align: center; margin-top: 4em;">
        <div style="background: #fff; border-radius: 12px; box-shadow: 0 8px 32px rgba(0,0,0,0.1); padding: 2em; max-width: 600px; margin: 0 auto;">
            <p style="color: #2c3e50; font-size: 1.1rem; font-style: italic; line-height: 1.6; margin: 0;">
                "{{ $Motto }}"
            </p>
            <p style="color: #5a6c7d; font-size: 0.9rem; margin-top: 1em; font-weight: 500;">- {{ $Nama }}</p>
        </div>
    </div>
</div>
