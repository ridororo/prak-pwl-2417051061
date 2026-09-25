<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kartu Nama Mahasiswa - Bushido Edition</title>
    <!-- Google Fonts: Shippori Mincho & Cinzel -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@600;800&family=Shippori+Mincho:wght@500;700;800&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            min-height: 100vh;
            background: #09090b;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 24px;
            font-family: 'Shippori Mincho', serif;
            color: #ededed;
        }

        /* Kartu Nama Meishi Bergaya Samurai */
        .samurai-card {
            position: relative;
            width: 100%;
            max-width: 440px;
            background: linear-gradient(145deg, #141416 0%, #0d0d0e 100%);
            border-radius: 4px;
            padding: 44px 38px;
            border-left: 4px solid #b91c1c;
            border-top: 1px solid rgba(255, 255, 255, 0.08);
            border-right: 1px solid rgba(255, 255, 255, 0.05);
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
            box-shadow: 
                0 25px 60px rgba(0, 0, 0, 0.9),
                inset 0 0 40px rgba(0, 0, 0, 0.7);
            overflow: hidden;
        }

        /* Tulisan Kanji Samar di Belakang (Bushido) */
        .kanji-watermark {
            position: absolute;
            right: 15px;
            bottom: -20px;
            font-size: 160px;
            font-weight: 800;
            color: rgba(255, 255, 255, 0.025);
            line-height: 1;
            user-select: none;
            pointer-events: none;
        }

        /* Header Kartu: Garis Katana & Teks Asal */
        .header-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }

        .clan-title {
            font-family: 'Cinzel', serif;
            font-size: 11px;
            letter-spacing: 4px;
            color: #a1a1aa;
            text-transform: uppercase;
        }

        /* Stempel Hanko Merah Tradisional */
        .hanko-seal {
            border: 2px solid #dc2626;
            color: #dc2626;
            padding: 3px 8px;
            font-size: 11px;
            font-weight: 800;
            letter-spacing: 2px;
            line-height: 1;
            box-shadow: 0 0 10px rgba(220, 38, 38, 0.2);
            text-transform: uppercase;
        }

        /* Identitas Utama */
        .identity-section {
            margin-bottom: 32px;
        }

        .name-label {
            font-size: 11px;
            letter-spacing: 3px;
            color: #71717a;
            text-transform: uppercase;
            margin-bottom: 8px;
        }

        .warrior-name {
            font-size: 26px;
            font-weight: 800;
            color: #ffffff;
            letter-spacing: 1px;
            line-height: 1.2;
            text-shadow: 0 2px 8px rgba(0, 0, 0, 0.8);
        }

        /* Garis Pemisah Sayatan Bilah (Blade Slash) */
        .katana-divider {
            height: 1px;
            width: 100%;
            background: linear-gradient(90deg, #dc2626 0%, rgba(255, 255, 255, 0.2) 40%, transparent 100%);
            margin-bottom: 28px;
        }

        /* Detail Nomor & Divisi */
        .meta-grid {
            display: grid;
            grid-template-columns: 1.4fr 1fr;
            gap: 16px;
        }

        .meta-item {
            display: flex;
            flex-direction: column;
            gap: 4px;
        }

        .meta-label {
            font-size: 10px;
            letter-spacing: 2px;
            color: #71717a;
            text-transform: uppercase;
        }

        .meta-value {
            font-size: 15px;
            font-weight: 700;
            letter-spacing: 1.5px;
            color: #e4e4e7;
        }
    </style>
</head>
<body>

    <div class="samurai-card">
        <!-- Kanji Background: 武士道 (Bushido) -->
        <div class="kanji-watermark">武</div>

        <div class="header-meta">
            <span class="clan-title">Universitas Lampung</span>
            <div class="hanko-seal">武士</div>
        </div>

        <div class="identity-section">
            <div class="name-label">Nama Mahasiswa</div>
            <div class="warrior-name">{{ $nama ?: 'Filut Ridho Aji' }}</div>
        </div>

        <div class="katana-divider"></div>

        <div class="meta-grid">
            <div class="meta-item">
                <span class="meta-label">Nomor Pokok Mahasiswa</span>
                <span class="meta-value">{{ $npm ?: '2417051061' }}</span>
            </div>
            <div class="meta-item">
                <span class="meta-label">Divisi / Kelas</span>
                <span class="meta-value">Kelas {{ $kelas ?: 'C' }}</span>
            </div>
        </div>
    </div>

</body>
</html>