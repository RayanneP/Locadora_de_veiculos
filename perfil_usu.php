<?php 
// backend (exemplo fictício - conexão e lógica futura)
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADM - Locadora de veículos</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <!-- Ícones Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Seu CSS personalizado -->
    <link rel="stylesheet" href="style.css">
</head>
<body class="container py-4">

<div class="container py-4">
    <!-- Topo com info do usuário -->
    <div class="row mb-4">
        <div class="col-md-12">
            <div class="d-flex justify-content-between align-items-center inicio">
                <h1>Sistema de Locadora de veículos</h1>
                <div class="d-flex align-items-center gap-3 user-info mx-3">
                    <i class="bi bi-person-circle" style="font-size:24px"></i>
                    <span>Bem vindo, <strong>Usuário</strong></span>
                    <a href="#" class="btn btn-outline-danger d-flex align-items-center gap-1">
                        <i class="bi bi-box-arrow-right"></i> Sair
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Formulário para calcular aluguel -->
    <div class="row same-height-row">
        <div class="col-md-12">
            <div class="card h-100">
                <div class="card-header">
                    <h4>Calcular a previsão de aluguel 💰</h4>
                </div>
                <div class="card-body">
                    <form action="#" method="post" class="needs-validation" novalidate>
                        <div class="mb-3">
                            <label class="form-label">Tipo de veículo</label>
                            <select class="form-select" name="tipo" required>
                                <option value="carro">Carro</option>
                                <option value="moto">Moto</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Quantidade de dias 📅</label>
                            <input type="number" name="dias_calculo" class="form-control" value="1" required>
                        </div>
                        <button type="submit" class="btn btn-success w-100">Calcular previsão</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Tabela de veículos -->
    <div class="row mt-4">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Veículos cadastrados 🗒️</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>Tipo</th>
                                    <th>Modelo</th>
                                    <th>Placa</th>
                                    <th>Status</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Carro</td>
                                    <td>Uno</td>
                                    <td>ABC1D34</td>
                                    <td><span class="badge bg-success">Disponível ✅</span></td>
                                    <td>
                                        <button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#detalhesModal">Ver Detalhes</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Carro</td>
                                    <td>Celta</td>
                                    <td>ABC1D567</td>
                                    <td><span class="badge bg-success">Disponível ✅</span></td>
                                    <td>
                                        <button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#detalhesModal2">Ver Detalhes</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Carro</td>
                                    <td>Chevrolet Onix</td>
                                    <td>HBG1F897</td>
                                    <td><span class="badge bg-success">Disponível ✅</span></td>
                                    <td>
                                        <button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#detalhesModal3">Ver Detalhes</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Moto</td>
                                    <td>Kawasaki Ninja 400</td>
                                    <td>DEF5G677</td>
                                    <td><span class="badge bg-danger">Indisponível ❌</span></td>
                                    <td>
                                        <button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#detalhesModal4">Ver Detalhes</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Botão para solicitar aluguel -->
                    <button class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#cadastroModal">
                        Solicitar Aluguel 🚗
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal: Detalhes do veículo -->
<div class="modal fade" id="detalhesModal" tabindex="-1" aria-labelledby="detalhesModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="detalhesModalLabel">Detalhes do Veículo</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
      </div>
      <div class="modal-body">
        <p><strong>Tipo:</strong> Carro</p>
        <p><strong>Modelo:</strong> Uno</p>
        <p><strong>Placa:</strong> ABC1D34</p>
        <p><strong>Status:</strong> Disponível ✅</p>
        <p><strong>Ano:</strong> 2020</p>
        <p><strong>Cor:</strong> Branco</p>
      </div>
    </div>
  </div>
</div>

<!-- Modal: Detalhes do veículo -->
<div class="modal fade" id="detalhesModal2" tabindex="-1" aria-labelledby="detalhesModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="detalhesModalLabel">Detalhes do Veículo</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
      </div>
      <div class="modal-body">
        <p><strong>Tipo:</strong> Carro</p>
        <p><strong>Modelo:</strong> Celta</p>
        <p><strong>Placa:</strong> ABC1D567</p>
        <p><strong>Status:</strong> Disponível ✅</p>
        <p><strong>Ano:</strong> 2000</p>
        <p><strong>Cor:</strong> Vermelho</p>
      </div>
    </div>
  </div>
</div>

<!-- Modal: Detalhes do veículo -->
<div class="modal fade" id="detalhesModal3" tabindex="-1" aria-labelledby="detalhesModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="detalhesModalLabel">Detalhes do Veículo</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
      </div>
      <div class="modal-body">
        <p><strong>Tipo:</strong> Carro</p>
        <p><strong>Modelo:</strong> Chevrolet Onix</p>
        <p><strong>Placa:</strong> HBG1F897</p>
        <p><strong>Status:</strong> Disponível ✅</p>
        <p><strong>Ano:</strong> 2012</p>
        <p><strong>Cor:</strong> Azul Sky</p>
      </div>
    </div>
  </div>
</div>

<!-- Modal: Detalhes do veículo -->
<div class="modal fade" id="detalhesModal4" tabindex="-1" aria-labelledby="detalhesModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="detalhesModalLabel">Detalhes do Veículo</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
      </div>
      <div class="modal-body">
        <p><strong>Tipo:</strong> Carro</p>
        <p><strong>Modelo:</strong> Kawasaki Ninja 400</p>
        <p><strong>Placa:</strong> DEF5G677</p>
        <p><strong>Status:</strong> Indisponível ❌</p>
        <p><strong>Ano:</strong> 2022</p>
        <p><strong>Cor:</strong> verde</p>
      </div>
    </div>
  </div>
</div>

<!-- Modal: Solicitação de aluguel -->
<div class="modal fade" id="cadastroModal" tabindex="-1" aria-labelledby="cadastroModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="solicitar.php" method="POST">
        <div class="modal-header">
          <h5 class="modal-title" id="cadastroModalLabel">Solicitar Aluguel</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
        </div>
        <div class="modal-body">
            <div class="mb-3">
                <label class="form-label">Nome</label>
                <input type="text" class="form-control" name="nome" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Veículo desejado</label>
                <select class="form-select" name="veiculo">
                    <option value="Uno">Uno</option>
                    <option value="Celta">Celta</option>
                    <option value="Onix">Chevrolet Onix</option>
                    <option value="Ninja 400">Kawasaki Ninja 400</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Dias de aluguel</label>
                <input type="number" class="form-control" name="dias" min="1" required>
            </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success">Enviar Solicitação</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
