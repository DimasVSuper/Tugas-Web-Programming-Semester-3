<header style="width:100%; background:#fff; color:#2c3e50; padding: 1em 0; box-shadow: 0 2px 10px rgba(0,0,0,0.08); border-bottom: 1px solid #e8ecef; margin-bottom: 0; font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;">
    <div style="max-width:1200px; margin:0 auto; padding:0 2em; display:flex; align-items:center; justify-content:space-between;">
        <div style="font-size:1.8rem; font-weight:600; letter-spacing:-0.02em; color:#2c3e50;">
            Website Perkenalan
        </div>
        <nav style="display:flex; gap:2.5em;">
            <a href="{{ url('/beranda') }}" style="color:#5a6c7d; text-decoration:none; font-weight:500; font-size:1rem; position:relative; transition:all 0.3s ease; padding:0.5em 0;" onmouseover="this.style.color='#0073aa'; this.style.transform='translateY(-1px)'" onmouseout="this.style.color='#5a6c7d'; this.style.transform='translateY(0)'">Beranda</a>
            <a href="{{ url('/biodata') }}" style="color:#5a6c7d; text-decoration:none; font-weight:500; font-size:1rem; position:relative; transition:all 0.3s ease; padding:0.5em 0;" onmouseover="this.style.color='#0073aa'; this.style.transform='translateY(-1px)'" onmouseout="this.style.color='#5a6c7d'; this.style.transform='translateY(0)'">Biodata</a>
            <a href="{{ url('/profile') }}" style="color:#5a6c7d; text-decoration:none; font-weight:500; font-size:1rem; position:relative; transition:all 0.3s ease; padding:0.5em 0;" onmouseover="this.style.color='#0073aa'; this.style.transform='translateY(-1px)'" onmouseout="this.style.color='#5a6c7d'; this.style.transform='translateY(0)'">Profile</a>
        </nav>
    </div>
</header>