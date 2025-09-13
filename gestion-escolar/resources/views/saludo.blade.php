<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Salud — Consejos y Herramientas</title>
  <meta name="description" content="Página simple con consejos de salud, checklist y calculadora de IMC." />
  <style>
    :root{
      --accent:#2b8a7e;
      --muted:#6b7280;
      --card:#ffffff;
      --bg:#f7faf9;
      font-family: Inter, system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial;
    }
    *{box-sizing:border-box}
    body{margin:0;background:var(--bg);color:#0f172a;line-height:1.5}
    header{background:linear-gradient(90deg,var(--accent),#5bb3a5);color:white;padding:2rem 1rem}
    .container{max-width:980px;margin:0 auto;padding:1rem}
    h1{margin:.2rem 0;font-size:1.75rem}
    p.lead{opacity:.95;color:rgba(255,255,255,.95);margin:0}

    .grid{display:grid;grid-template-columns:1fr;gap:1rem;margin-top:1rem}
    @media(min-width:840px){.grid{grid-template-columns:2fr 1fr}}

    .card{background:var(--card);border-radius:12px;box-shadow:0 6px 20px rgba(15,23,42,0.06);padding:1rem}
    .card h2{margin-top:0}

    ul.checklist{list-style:none;padding:0;margin:0}
    ul.checklist li{padding:.5rem 0;border-bottom:1px solid #eef2f6}

    .tips{display:grid;grid-template-columns:1fr;gap:.75rem}
    @media(min-width:720px){.tips{grid-template-columns:repeat(2,1fr)}}

    .btn{display:inline-block;padding:.5rem .9rem;border-radius:8px;background:var(--accent);color:white;text-decoration:none}

    footer{padding:1.5rem 1rem;text-align:center;color:var(--muted);font-size:.9rem}

    /* IMC form */
    .form-row{display:flex;gap:.5rem}
    .form-row input{flex:1;padding:.5rem;border-radius:8px;border:1px solid #e6eef0}
    .result{font-weight:700;margin-top:.5rem}

    .badge{display:inline-block;padding:.25rem .5rem;border-radius:999px;background:#eefaf8;color:#045c52;font-weight:600;font-size:.85rem}
  </style>
</head>
<body>
  <header>
    <div class="container">
      <h1>Salud</h1>
      <p class="lead">Consejos rápidos, checklist y herramientas para cuidar tu salud física y mental.</p>
    </div>
  </header>

  <main class="container" aria-live="polite">
    <section class="grid" aria-label="Contenido principal">
      <div class="card" id="consejos">
        <h2>Consejos rápidos</h2>
        <div class="tips">
          <div>
            <h3>Alimentación</h3>
            <p>Prefiere alimentos reales: verduras, frutas, legumbres, carnes magras y cereales integrales. Evitá ultraprocesados cuando puedas.</p>
          </div>
          <div>
            <h3>Actividad física</h3>
            <p>150 minutos por semana de actividad moderada es una buena meta inicial. Si estás empezando, 20–30 minutos diarios ya ayudan.</p>
          </div>
          <div>
            <h3>Sueño</h3>
            <p>Apuntá a 7–9 horas por noche. Rutina, reducir pantallas y ambiente oscuro ayudan mucho.</p>
          </div>
          <div>
            <h3>Hidratación</h3>
            <p>Tomá agua durante el día. La cantidad varía, pero escuchar la sed y mirar color de orina es práctico.</p>
          </div>
        </div>

        <hr />
        <h3>Salud mental</h3>
        <p>Mantené conexiones sociales, practicá pausas activas y técnicas breves de respiración cuando te sientas estresado.</p>
      </div>

      <aside>
        <div class="card" aria-labelledby="checklist-title">
          <h2 id="checklist-title">Checklist semanal</h2>
          <ul class="checklist" aria-describedby="checklist-desc">
            <li><label><input type="checkbox"> 3 días de actividad física (30 min)</label></li>
            <li><label><input type="checkbox"> 5 porciones de verduras/frutas</label></li>
            <li><label><input type="checkbox"> Dormir 7+ horas 5 noches</label></li>
            <li><label><input type="checkbox"> Beber agua regularmente</label></li>
            <li><label><input type="checkbox"> Tiempo sin pantallas antes de dormir</label></li>
          </ul>
          <p style="margin-top:.75rem"><a class="btn" href="#imc">Usar calculadora de IMC</a></p>
        </div>

        <div class="card" id="imc" style="margin-top:1rem">
          <h2>Calculadora de IMC</h2>
          <p class="muted">Ingresá tu peso en kg y altura en metros.</p>
          <form id="bmiForm" onsubmit="return false;" aria-label="Formulario de IMC">
            <div class="form-row">
              <input id="peso" type="number" step="0.1" placeholder="Peso (kg)" aria-label="Peso en kilogramos">
              <input id="altura" type="number" step="0.01" placeholder="Altura (m)" aria-label="Altura en metros">
            </div>
            <div style="margin-top:.6rem;display:flex;gap:.5rem">
              <button class="btn" id="calcBtn">Calcular</button>
              <button id="clearBtn" type="button" style="background:#e6eef0;color:#0b1220;border-radius:8px;padding:.5rem .9rem;border:none">Limpiar</button>
            </div>
            <div id="bmiResult" class="result" role="status" aria-live="polite"></div>
          </form>
        </div>

      </aside>
    </section>

    <section style="margin-top:1rem" class="card" aria-label="Sección de recursos">
      <h2>Recursos y recomendaciones</h2>
      <ul>
        <li>Visitá a tu médico de cabecera para chequeos regulares.</li>
        <li>Si notas cambios en tu salud física o mental, buscá ayuda profesional.</li>
        <li>Mantené registros simples (agua, sueño, ejercicio) para ver progresos.</li>
      </ul>
      <p style="margin-top:.5rem"><span class="badge">Tip</span> Si tenés alguna condición médica, adaptá estos consejos con tu profesional.</p>
    </section>

  </main>

  <footer>
    <div class="container">
      <small>Hecho con ❤️ — Información educativa, no sustituye el consejo médico profesional.</small>
    </div>
  </footer>

  <script>
    function clasificarIMC(imc){
      if(imc < 18.5) return 'Bajo peso';
      if(imc < 25) return 'Normal';
      if(imc < 30) return 'Sobrepeso';
      return 'Obesidad';
    }

    document.getElementById('calcBtn').addEventListener('click', function(e){
      var peso = parseFloat(document.getElementById('peso').value);
      var altura = parseFloat(document.getElementById('altura').value);
      var out = document.getElementById('bmiResult');
      out.textContent = '';

      if(!peso || !altura || peso <= 0 || altura <= 0){
        out.textContent = 'Por favor ingresá peso y altura válidos.';
        return;
      }

      var imc = peso / (altura * altura);
      out.textContent = 'IMC: ' + imc.toFixed(2) + ' — ' + clasificarIMC(imc);
    });

    document.getElementById('clearBtn').addEventListener('click', function(){
      document.getElementById('peso').value = '';
      document.getElementById('altura').value = '';
      document.getElementById('bmiResult').textContent = '';
    });
  </script>
</body>
</html>
