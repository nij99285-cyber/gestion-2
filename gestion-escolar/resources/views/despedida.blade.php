<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Hasta Luego — Despedida</title>
  <meta name="description" content="Página de despedida con estilo oscuro, animación y botón para volver." />
  <style>
    :root{
      --bg:#0b0f14;
      --card:#0f1720;
      --muted:#9aa4af;
      --accent:#6ee7b7;
      --accent-2:#60a5fa;
      font-family: Inter, system-ui, -apple-system, 'Segoe UI', Roboto, Arial;
    }
    *{box-sizing:border-box}
    html,body{height:100%}
    body{margin:0;background:radial-gradient(1200px 600px at 10% 10%, rgba(96,165,250,0.06), transparent), radial-gradient(1000px 500px at 90% 90%, rgba(110,231,183,0.04), transparent), var(--bg);color:#e6eef6;display:flex;align-items:center;justify-content:center}

    .card{width:min(900px,94%);background:linear-gradient(180deg, rgba(255,255,255,0.02), rgba(255,255,255,0.01));border:1px solid rgba(255,255,255,0.04);padding:2.5rem;border-radius:16px;box-shadow:0 10px 40px rgba(2,6,23,0.7);backdrop-filter: blur(6px);display:flex;gap:2rem;align-items:center}

    .left{flex:1}
    .right{width:260px;display:flex;flex-direction:column;gap:1rem;align-items:center}

    h1{font-size:2.1rem;margin:0 0 .25rem}
    p.lead{margin:0;color:var(--muted)}

    .wave{display:inline-block;transform-origin:70% 70%;animation:wave 2.4s infinite}
    @keyframes wave{0%{transform:rotate(0)}15%{transform:rotate(14deg)}30%{transform:rotate(-8deg)}45%{transform:rotate(14deg)}60%{transform:rotate(-4deg)}100%{transform:rotate(0)}}

    .meta{margin-top:1rem;color:var(--muted);display:flex;gap:1rem;align-items:center}
    .chip{background:linear-gradient(90deg, rgba(255,255,255,0.02), rgba(255,255,255,0.01));padding:.35rem .65rem;border-radius:999px;border:1px solid rgba(255,255,255,0.03);font-weight:600}

    .actions{display:flex;gap:.75rem;margin-top:1.25rem}
    .btn{padding:.6rem 1rem;border-radius:10px;border:none;font-weight:700;cursor:pointer}
    .btn-primary{background:linear-gradient(90deg,var(--accent),var(--accent-2));color:#042029}
    .btn-ghost{background:transparent;color:var(--muted);border:1px solid rgba(255,255,255,0.04)}

    footer{font-size:.9rem;color:var(--muted);margin-top:1.5rem}

    .sparkle{width:100%;height:2px;background:linear-gradient(90deg, transparent, rgba(110,231,183,0.14), transparent);margin-top:1.25rem}

    /* small responsiveness */
    @media(max-width:720px){.card{flex-direction:column}.right{width:100%;flex-direction:row;justify-content:space-between}}
  </style>
</head>
<body>
  <main class="card" role="main" aria-labelledby="titulo-despedida">
    <div class="left">
      <h1 id="titulo-despedida">Hasta luego <span class="wave" aria-hidden="true">👋</span></h1>
      <p class="lead">Gracias por compartir tu tiempo. Que tus proyectos prosperen y tu código compile a la primera.</p>

      <div class="meta" aria-hidden="false">
        <div class="chip">Mantente curioso</div>
        <div class="chip">Sigue creando</div>
      </div>

      <div class="sparkle" aria-hidden="true"></div>

      <div class="actions" role="group" aria-label="Acciones de despedida">
        <button class="btn btn-primary" id="volverBtn">Volver al inicio</button>
        <button class="btn btn-ghost" id="guardarBtn">Guardar mensaje</button>
      </div>

      <footer aria-hidden="false">Si necesitás ayuda en algo más, buscame cuando quieras.</footer>
    </div>

    <aside class="right" aria-label="Mini tarjeta">
      <div style="text-align:center">
        <div style="font-size:.85rem;color:var(--muted);">Tu Sensei</div>
        <div style="font-size:1.3rem;font-weight:800;margin-top:.35rem">GPT‑5 Thinking mini</div>
        <div style="margin-top:.6rem;color:var(--muted);font-size:.9rem">Siempre listo para el próximo desafío</div>
      </div>

      <div style="width:100%;display:flex;flex-direction:column;gap:.5rem;align-items:stretch">
        <button class="btn btn-ghost" id="compartirBtn">Compartir</button>
        <button class="btn btn-ghost" id="cerrarBtn">Cerrar</button>
      </div>
    </aside>
  </main>

  <script>
    document.getElementById('volverBtn').addEventListener('click', function(){
      // ejemplo: volver a index o recargar
      window.location.href = '/';
    });

    document.getElementById('guardarBtn').addEventListener('click', function(){
      // generar y descargar un txt con el mensaje de despedida
      const text = 'Hasta luego. Gracias por tu tiempo.\n\n— Tu Sensei';
      const blob = new Blob([text], {type: 'text/plain;charset=utf-8'});
      const url = URL.createObjectURL(blob);
      const a = document.createElement('a');
      a.href = url; a.download = 'despedida.txt'; document.body.appendChild(a); a.click(); a.remove(); URL.revokeObjectURL(url);
    });

    document.getElementById('compartirBtn').addEventListener('click', function(){
      if(navigator.share){
        navigator.share({title: document.title, text: 'Hasta luego — te comparto este mensaje.'}).catch(()=>{});
      } else {
        alert('Tu navegador no soporta la función compartir.');
      }
    });

    document.getElementById('cerrarBtn').addEventListener('click', function(){
      window.close();
    });
  </scri