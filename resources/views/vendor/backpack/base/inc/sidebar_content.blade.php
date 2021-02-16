<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>
<!-- Cadastros -->
<li class="nav-item nav-dropdown">
	<a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-users"></i>Cadastros</a>
	<ul class="nav-dropdown-items">
		<!-- Users, Roles, Permissions -->
		<li class="nav-item nav-dropdown">
			<a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-users"></i>Autorizações</a>
			<ul class="nav-dropdown-items">
				<li class="nav-item"><a class="nav-link" href="{{ backpack_url('user') }}"><i class="nav-icon la la-user"></i> <span>Usuários</span></a></li>
				<li class="nav-item"><a class="nav-link" href="{{ backpack_url('role') }}"><i class="nav-icon la la-id-badge"></i> <span>Perfis</span></a></li>
				<li class="nav-item"><a class="nav-link" href="{{ backpack_url('permission') }}"><i class="nav-icon la la-key"></i> <span>Permições</span></a></li>
				<li class="nav-item"><a class="nav-link" href="{{ backpack_url('empresa') }}"><i class="nav-icon las la-house-damage"></i> <span>Empresa</span></a></li>
			</ul>
		</li>
	</ul>
</li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('avaliacao') }}'><i class='nav-icon la la-question'></i> Avaliacaos</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('categoria') }}'><i class='nav-icon la la-question'></i> Categorias</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('cliente') }}'><i class='nav-icon la la-question'></i> Clientes</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('detalheplano') }}'><i class='nav-icon la la-question'></i> DetalhePlanos</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('mesa') }}'><i class='nav-icon la la-question'></i> Mesas</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('pedido') }}'><i class='nav-icon la la-question'></i> Pedidos</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('plano') }}'><i class='nav-icon la la-question'></i> Planos</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('produto') }}'><i class='nav-icon la la-question'></i> Produtos</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('tenant') }}'><i class='nav-icon la la-question'></i> Tenants</a></li>