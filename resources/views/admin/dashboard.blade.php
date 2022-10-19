@extends('shared.admin-layout')

@section('title') Dashboard @stop

@section('content')
<!-- Hero -->
			<!-- Hero End -->

			<!-- Services -->
			<div class="services" style="margin-top: 20px;">
				<div class="container">
					<div class="main-title">
						<h2 id="orderFood">Dashboard</h2>
						<p>Aqui é onde ocorre qualquer alteração, edição ou remoção de produtos.</p>
					</div>
					<div class="row">
						<div class="col-lg-6 animated-element">
							<a href="#" class="service-link">
								<div class="box text-center"> <a href="#modalDetailsItem02"
										class="item-body-link modal-opener">
										<div class="icon d-flex align-items-end"><i class="icon icon-credit-card2"></i>
										</div>
										<h3 class="service-title">Adicionar produtos</h3>
										<p class="textDashboard">Aqui é onde você cria novos produtos para a página.</p>
									</a>
								</div>
							</a>
						</div>

						<div class="col-lg-6 animated-element">
							<a href="#" class="service-link">
								<div class="box text-center"> <a href="#modalDetailsItem01"
										class="item-body-link modal-opener">
										<div class="icon d-flex align-items-end"><i class="icon icon-wallet"></i></div>
										<h3 class="service-title">Editar ou remover produtos</h3>
										<p class="textDashboard">Aqui é o lugar onde você pode editar ou remover
											produtos.</p>
									</a>
								</div>
							</a>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-12 animated-element">
							<a class="service-link">
								<div class="box box2 text-center"> <a href="#modalDetailsItem03"
										class="item-body-link modal-opener">
										<div class="icon d-flex align-items-center justify-content-center"><i
												class="fa-brands fa-pix"></i></div>
										<h3 class="service-title">Pedidos</h3>
										<p class="textDashboard">É aqui onde você pode ver os novos pedidos que estão
											sendo encaminhados.</p>
									</a>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
@stop

@section('modal')

<div id="modalDetailsItem01" class="dashboardModal-popup zoom-anim-dialog mfp-hide">
	<div class="small-dialog-header">
		<h3>Edição de produtos</h3>
	</div>

	<form method="POST" id="EditForm" name="EditForm">

		<div class="content pb-1">
			<select id="category2" class="wide price-list EditarProd" name="editarProd">
				<option value="">Selecionar produto</option>
				<option value=".Salgados">YX</option>
				<option value=".Doces">XY</option>
				<option value=".Bebidas">XZ</option>
			</select>
		</div>

		<!-- Step 2: Checkout -->
		<div class="step">
			<h3 class="editTittle">Formulário de edição</h3>
			<div id="personalDetails">
				<div class="order-body">
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="images" class="drop-container">
									<span class="drop-title">Arraste a imagem aqui</span>
									ou
									<input type="file" id="images" accept="image/*" required>
								</label>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="userNameCashPayment">Nome</label>
								<input id="userNameCashPayment" class="form-control" name="username" type="text"
									data-parsley-pattern="^[a-zA-Z\s.]+$" required />
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="phoneCashPayment">Ingredientes</label>
								<input id="phoneCashPayment" class="form-control" name="phone" type="text"
									data-parsley-pattern="^[0-9]+$" required />
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="phoneCashPayment">Preços</label>
								<input id="phoneCashPayment" class="form-control" name="preco" type="number" min="0"
									required />
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6 ">
							<button type="submit" name="submit" id="submitOrder" class="btn-form-func">
								<span class="btn-form-func-content">Atualizar</span>
								<span class="icon"><i class="fa fa-check" aria-hidden="true"></i></span>
							</button>
						</div>

						<div class="col-md-5 justify-content-center align-content-center ">
							<button type="button" name="backward"
								class="btn-form-func btn-form-func-alt-color1 backward">
								<span class="btn-form-func-content">Apagar</span>
								<span class="icon"><i class="fa fa-times" aria-hidden="true"></i></span>
							</button>
						</div>

						<div
							class="col-md-1 justify-content-center align-content-center justify-content-center centerSwitch">
							<label class="switch">
								<input type="checkbox">
								<span class="slider round"></span>
							</label>
						</div>
					</div>
					<!--<div class="row footer">
							<div class="col-md-12 text-center">
								<small>Copyrigth FoodBoard 2021.</small>
							</div>
						</div>-->
				</div>
			</div>
		</div>
		<!-- Step 2: Checkout End -->

	</form>
</div>


<div id="modalDetailsItem02" class="dashboardModal-popup zoom-anim-dialog mfp-hide">
	<div class="small-dialog-header">
		<h3>Criação de produtos</h3>
	</div>

	<form class="product-form" action="{{ route('admin.products.create') }}" method="POST" id="CreateForm" name="CreateForm">
		@csrf
		<!-- Step 2: Checkout -->
		<div class="step">
			<h3 class="editTittle">Formulário de criação</h3>
			<div id="personalDetails">
				<div class="order-body">
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="images" class="drop-container">
									<span class="drop-title">Arraste a imagem aqui</span>
									ou
									<input valueType="image" name="image" type="file" id="images" accept="image/*">
								</label>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="name">Nome</label>
								<input valueType="string" id="name" class="form-control" name="name" type="text"
									data-parsley-pattern="^[a-zA-Z\s.]+$" required />
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="ingredients">Ingredientes</label>
								<input valueType="array" id="ingredients" class="form-control" name="ingredients" type="text"
									data-parsley-pattern="^[0-9]+$" />
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="price">Preços</label>
								<input valueType="numeric" id="price" class="form-control" name="price" type="number" min="0" step="0.01"
									required />
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<button type="submit" name="submit" id="submitCreate" class="btn-form-func submitButton">
								<span class="btn-form-func-content">Criar produto</span>
								<span class="icon"><i class="fa fa-check" aria-hidden="true"></i></span>
							</button>
						</div>
					</div>
					<!--<div class="row footer">
							<div class="col-md-12 text-center">
								<small>Copyrigth FoodBoard 2021.</small>
							</div>
						</div>-->
				</div>
			</div>
		</div>
		<!-- Step 2: Checkout End -->

	</form>

</div>

<div id="modalDetailsItem03" class="dashboardModal-popup zoom-anim-dialog mfp-hide">
	<div class="small-dialog-header">
		<h3>Visualização de pedidos</h3>
	</div>

	<!-- Step 2: Checkout -->
	<div class="step">
		<h3 class="editTittleProd">pedidos atuais</h3>
		<div id="personalDetails">
			<div class="order-body">

				<div class="row" id="RowPedidos">
					<!--É nesse id da Row que você vai usar o ForEach -->

					<div class="col-md-3">
						<div class="box text-center">
							<h3 class="service-title">Matheus Monteiro</h3>

							<div class="contentOrders">

								<p class="textDashboard"> <span class="numberOrder">2X</span> Risóles de presunto e
									queijo </p>
								<p class="textDashboard"> <span class="numberOrder">1X</span> Coca-cola 450ml </p>
								<p class="textDashboard"> <span class="numberOrder">3X</span> Bala Halls</p>

							</div>

							<div class="row">
								<div class="col-md-7 ">
									<button type="submit" name="finish" class="btn-form-func2">
										<span class="btn-form-func-content">Finalizar</span>
									</button>
								</div>

								<div class="col-md-5 ">
									<button type="button" name="cancel"
										class="btn-form-func2 btn-form-func-alt-color1 backward">
										<span class="btn-form-func-content">Cancelar</span>
									</button>
								</div>

							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="box text-center">
							<h3 class="service-title">Matheus Monteiro</h3>

							<div class="contentOrders">

								<p class="textDashboard"> <span class="numberOrder">2X</span> Risóles de presunto e
									queijo </p>
								<p class="textDashboard"> <span class="numberOrder">1X</span> Coca-cola 450ml </p>
								<p class="textDashboard"> <span class="numberOrder">3X</span> Bala Halls</p>

							</div>

							<div class="row">
								<div class="col-md-7 ">
									<button type="submit" name="finish" class="btn-form-func2">
										<span class="btn-form-func-content">Finalizar</span>
									</button>
								</div>

								<div class="col-md-5 ">
									<button type="button" name="cancel"
										class="btn-form-func2 btn-form-func-alt-color1 backward">
										<span class="btn-form-func-content">Cancelar</span>
									</button>
								</div>

							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="box text-center">
							<h3 class="service-title">Matheus Monteiro</h3>

							<div class="contentOrders">

								<p class="textDashboard"> <span class="numberOrder">2X</span> Risóles de presunto e
									queijo </p>
								<p class="textDashboard"> <span class="numberOrder">1X</span> Coca-cola 450ml </p>
								<p class="textDashboard"> <span class="numberOrder">3X</span> Bala Halls</p>

							</div>

							<div class="row">
								<div class="col-md-7 ">
									<button type="submit" name="finish" class="btn-form-func2">
										<span class="btn-form-func-content">Finalizar</span>
									</button>
								</div>

								<div class="col-md-5 ">
									<button type="button" name="cancel"
										class="btn-form-func2 btn-form-func-alt-color1 backward">
										<span class="btn-form-func-content">Cancelar</span>
									</button>
								</div>

							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="box text-center">
							<h3 class="service-title">Matheus Monteiro</h3>

							<div class="contentOrders">

								<p class="textDashboard"> <span class="numberOrder">2X</span> Risóles de presunto e
									queijo </p>
								<p class="textDashboard"> <span class="numberOrder">1X</span> Coca-cola 450ml </p>
								<p class="textDashboard"> <span class="numberOrder">3X</span> Bala Halls</p>

							</div>

							<div class="row">
								<div class="col-md-7 ">
									<button type="submit" name="finish" class="btn-form-func2">
										<span class="btn-form-func-content">Finalizar</span>
									</button>
								</div>

								<div class="col-md-5 ">
									<button type="button" name="cancel"
										class="btn-form-func2 btn-form-func-alt-color1 backward">
										<span class="btn-form-func-content">Cancelar</span>
									</button>
								</div>

							</div>
						</div>
					</div>
				</div>
				<div class="row" id="RowPedidos">
					<!--É nesse id da Row que você vai usar o ForEach -->

					<div class="col-md-3">
						<div class="box text-center">
							<h3 class="service-title">Matheus Monteiro</h3>

							<div class="contentOrders">

								<p class="textDashboard"> <span class="numberOrder">2X</span> Risóles de presunto e
									queijo </p>
								<p class="textDashboard"> <span class="numberOrder">1X</span> Coca-cola 450ml </p>
								<p class="textDashboard"> <span class="numberOrder">3X</span> Bala Halls</p>

							</div>

							<div class="row">
								<div class="col-md-7 ">
									<button type="submit" name="finish" class="btn-form-func2">
										<span class="btn-form-func-content">Finalizar</span>
									</button>
								</div>

								<div class="col-md-5 ">
									<button type="button" name="cancel"
										class="btn-form-func2 btn-form-func-alt-color1 backward">
										<span class="btn-form-func-content">Cancelar</span>
									</button>
								</div>

							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="box text-center">
							<h3 class="service-title">Matheus Monteiro</h3>

							<div class="contentOrders">

								<p class="textDashboard"> <span class="numberOrder">2X</span> Risóles de presunto e
									queijo </p>
								<p class="textDashboard"> <span class="numberOrder">1X</span> Coca-cola 450ml </p>
								<p class="textDashboard"> <span class="numberOrder">3X</span> Bala Halls</p>

							</div>

							<div class="row">
								<div class="col-md-7 ">
									<button type="submit" name="finish" class="btn-form-func2">
										<span class="btn-form-func-content">Finalizar</span>
									</button>
								</div>

								<div class="col-md-5 ">
									<button type="button" name="cancel"
										class="btn-form-func2 btn-form-func-alt-color1 backward">
										<span class="btn-form-func-content">Cancelar</span>
									</button>
								</div>

							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="box text-center">
							<h3 class="service-title">Matheus Monteiro</h3>

							<div class="contentOrders">

								<p class="textDashboard"> <span class="numberOrder">2X</span> Risóles de presunto e
									queijo </p>
								<p class="textDashboard"> <span class="numberOrder">1X</span> Coca-cola 450ml </p>
								<p class="textDashboard"> <span class="numberOrder">3X</span> Bala Halls</p>

							</div>

							<div class="row">
								<div class="col-md-7 ">
									<button type="submit" name="finish" class="btn-form-func2">
										<span class="btn-form-func-content">Finalizar</span>
									</button>
								</div>

								<div class="col-md-5 ">
									<button type="button" name="cancel"
										class="btn-form-func2 btn-form-func-alt-color1 backward">
										<span class="btn-form-func-content">Cancelar</span>
									</button>
								</div>

							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="box text-center">
							<h3 class="service-title">Matheus Monteiro</h3>

							<div class="contentOrders">

								<p class="textDashboard"> <span class="numberOrder">2X</span> Risóles de presunto e
									queijo </p>
								<p class="textDashboard"> <span class="numberOrder">1X</span> Coca-cola 450ml </p>
								<p class="textDashboard"> <span class="numberOrder">3X</span> Bala Halls</p>

							</div>

							<div class="row">
								<div class="col-md-7 ">
									<button type="submit" name="finish" class="btn-form-func2">
										<span class="btn-form-func-content">Finalizar</span>
									</button>
								</div>

								<div class="col-md-5 ">
									<button type="button" name="cancel"
										class="btn-form-func2 btn-form-func-alt-color1 backward">
										<span class="btn-form-func-content">Cancelar</span>
									</button>
								</div>

							</div>
						</div>
					</div>
				</div>

			</div> 
		
		</div>
	</div>

</div><!--fim do modal-->

@stop

@section('scripts')

<script>

	$.ajaxSetup({
		headers: { 'X-CSRF-TOKEN': '{{ csrf_token() }}'}
	})

	const getInputsFromForm = form => $(form).find(':input').toArray();
	
	const validators = {
		string: input => input.val().toString(),
		numeric: input => parseFloat(input.val()),
		array: input => JSON.stringify(input.val().toString().split(', ')),
		image: input => input.get(0).files[0]

	}

	const forms = $('.product-form').toArray();

	forms.forEach(form => {
		$(form).submit(e => {
			e.preventDefault();

			const inputs = getInputsFromForm(form);

			const payload = {}

			inputs.forEach(input => {
				input = $(input);
				payload[input.attr('name')] = validators[input.attr('valueType')] ? validators[input.attr('valueType')](input) : input.val();
			})

			const action = $(form).attr('action')
			const method = $(form).attr('method').toLowerCase()

			const data = new FormData

			for (const key in payload) {
				data.append(key, payload[key])
			}

			$.ajax({
				url: action,
				type: method,
				data,
				processData: false,
				contentType: false
			}).done(response => {
				console.log(response)
			})
			
		})
	})

	
</script>

@stop

