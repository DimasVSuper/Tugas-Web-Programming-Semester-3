<x-header />
<div style="min-height: 90vh; background: linear-gradient(135deg, #f8fafb 0%, #f1f5f9 100%); padding: 2em 1em; font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;">
    <!-- Header Section -->
    <div style="text-align: center; margin-bottom: 3em;">
        <h1 style="font-size: 2.5rem; color: #2c3e50; margin-bottom: 0.5em; font-weight: 700;">Galeri Foto Kegiatan</h1>
        <p style="font-size: 1.1rem; color: #5a6c7d; max-width: 600px; margin: 0 auto;">Dokumentasi berbagai kegiatan dan momen penting dalam perjalanan akademik dan personal</p>
    </div>

    <!-- Gallery Grid -->
    <div style="max-width: 1200px; margin: 0 auto; display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 1.5em;">
        
        <!-- Foto Formal 1 -->
        <div style="background: #fff; border-radius: 12px; box-shadow: 0 8px 32px rgba(0,0,0,0.1); overflow: hidden; transition: transform 0.3s ease;" onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='translateY(0)'">
            <img src="{{ asset('images/FotoFormal.jpg') }}" alt="Foto Formal" style="width: 100%; height: 250px; object-fit: cover;">
            <div style="padding: 1.5em;">
                <h3 style="font-size: 1.2rem; color: #2c3e50; margin-bottom: 0.5em; font-weight: 600;">Foto Formal</h3>
                <p style="color: #5a6c7d; font-size: 0.95rem; line-height: 1.5;">Foto formal untuk keperluan akademik dan dokumentasi resmi kampus.</p>
            </div>
        </div>

        <!-- Foto Kegiatan 2 -->
        <div style="background: #fff; border-radius: 12px; box-shadow: 0 8px 32px rgba(0,0,0,0.1); overflow: hidden; transition: transform 0.3s ease;" onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='translateY(0)'">
            <img src="{{ asset('images/1000015941.jpg') }}" alt="Kegiatan Akademik" style="width: 100%; height: 250px; object-fit: cover; filter: sepia(20%) hue-rotate(10deg);">
            <div style="padding: 1.5em;">
                <h3 style="font-size: 1.2rem; color: #2c3e50; margin-bottom: 0.5em; font-weight: 600;">Kegiatan Akademik</h3>
                <p style="color: #5a6c7d; font-size: 0.95rem; line-height: 1.5;">Dokumentasi selama mengikuti kegiatan perkuliahan dan diskusi akademik.</p>
            </div>
        </div>

        <!-- Foto Kegiatan 3 -->
        <div style="background: #fff; border-radius: 12px; box-shadow: 0 8px 32px rgba(0,0,0,0.1); overflow: hidden; transition: transform 0.3s ease;" onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='translateY(0)'">
            <img src="{{ asset('images/1000015941.jpg') }}" alt="Aktivitas Organisasi" style="width: 100%; height: 250px; object-fit: cover; filter: brightness(110%) contrast(105%);">
            <div style="padding: 1.5em;">
                <h3 style="font-size: 1.2rem; color: #2c3e50; margin-bottom: 0.5em; font-weight: 600;">Aktivitas Organisasi</h3>
                <p style="color: #5a6c7d; font-size: 0.95rem; line-height: 1.5;">Momen saat terlibat dalam kegiatan organisasi kemahasiswaan dan pengembangan diri.</p>
            </div>
        </div>

        <!-- Foto Kegiatan 4 -->
        <div style="background: #fff; border-radius: 12px; box-shadow: 0 8px 32px rgba(0,0,0,0.1); overflow: hidden; transition: transform 0.3s ease;" onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='translateY(0)'">
            <img src="{{ asset('images/1000015941.jpg') }}" alt="Kegiatan Sosial" style="width: 100%; height: 250px; object-fit: cover; filter: saturate(120%) brightness(105%);">
            <div style="padding: 1.5em;">
                <h3 style="font-size: 1.2rem; color: #2c3e50; margin-bottom: 0.5em; font-weight: 600;">Kegiatan Sosial</h3>
                <p style="color: #5a6c7d; font-size: 0.95rem; line-height: 1.5;">Partisipasi dalam kegiatan sosial dan pengabdian kepada masyarakat.</p>
            </div>
        </div>

    </div>

    <!-- Quote Section -->
    <div style="text-align: center; margin-top: 4em;">
        <div style="background: #fff; border-radius: 12px; box-shadow: 0 8px 32px rgba(0,0,0,0.1); padding: 2em; max-width: 600px; margin: 0 auto;">
            <p style="color: #2c3e50; font-size: 1.1rem; font-style: italic; line-height: 1.6; margin: 0;">
                "Bagi Rokok dong, Lidah asem nih"
            </p>
            <p style="color: #5a6c7d; font-size: 0.9rem; margin-top: 1em; font-weight: 500;">- Dimas Bayu Nugroho</p>
        </div>
    </div>
</div>
