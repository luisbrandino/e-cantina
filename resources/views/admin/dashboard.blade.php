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

	<form class="product-form" method="POST" class="" id="EditForm" name="EditForm" action="">

		<div class="content pb-1">
			<select id="edit-select" class="wide price-list EditarProd" name="editarProd">
				<option value="">Selecionar produto</option>
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
								<label for="edit-image" class="drop-container">
									<span class="drop-title">Arraste a imagem aqui</span>
									ou
									<input valueType="image" name="image" type="file" id="edit-image" accept="image/*">
								</label>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="edit-name">Nome</label>
								<input valueType="string" id="edit-name" class="form-control" name="name" type="text"
									data-parsley-pattern="^[a-zA-Z\s.]+$"/>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="edit-ingredients">Ingredientes</label>
								<input valueType="stringToArray" id="edit-ingredients" class="form-control" name="ingredients" type="text"
									data-parsley-pattern="^[0-9]+$"/>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="edit-price">Preços</label>
								<input valueType="numeric" id="edit-price" class="form-control" name="price" type="number" min="0" step="0.01"/>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6 ">
							<button type="submit" name="submit" id="submitEdit" class="btn-form-func">
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
								<input valueType="boolean" class="edit-on_menu" name="on_menu" type="checkbox">
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
		<h3 class="editTittleProd">Pedidos Atuais</h3>
		<div id="personalDetails">
			<div class="order-body" id="order-body">
				<h4 id="empty-orders" align="center">Não há mais pedidos pendentes.</h1>
			</div>
		</div>
	</div>

</div><!--fim do modal-->

<div class="col-md-3 inactive-order" style="visibility: hidden" id="order-template">
    <div class="box text-center">
		<h3 class="service-title"></h3>

		<div class="contentOrders">
		</div>

		<div class="ExtraInfo">
			<p class="TextEntra">Coletor: <span class="collector"></span></p>
			<p class="TextEntra">Preço total: R$<span class="total"></span></p>
		</div>

		<div class="row">
			<div class="col-md-7 ">
				<button type="submit" name="finish" class="btn-form-func2 finish-button">
					<span class="btn-form-func-content">Finalizar</span>
				</button>
			</div>

			<div class="col-md-5 ">
				<button type="button" name="cancel" class="btn-form-func2 btn-form-func-alt-color1 backward cancel-button">
					<span class="btn-form-func-content">Cancelar</span>
				</button>
		    </div>
	    </div>
	</div>
</div>

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
		image: input => input.get(0).files[0],
		stringToArray: input => JSON.stringify(input.val().split(', ')),
	}

	const forms = $('.product-form').toArray();

	forms.forEach(form => {
		$(form).submit(e => {
			e.preventDefault();

			const inputs = getInputsFromForm(form);

			const payload = {}

			inputs.forEach(input => {
				input = $(input);
				payload[input.attr('name')] = validators[input.attr('valueType')] ? validators[input.attr('valueType')](input) : undefined;
			})

			for (const key in payload) {
				if (!payload[key])
					delete payload[key]
			}

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

	const getOrders = () => {
        return new Promise(resolve => {
            $.ajax({
			url: '/admin/order/pending',
			type: 'GET',
		}).done(response => {
            //console.log(response)
			resolve(response)
		})
        })

	}

    const appendOrder = (currentRowIndex, order) => {
		$('#empty-orders').css('visibility', 'hidden');
        const orderTemplate = $('#order-template').clone().css('visibility', 'visible')
		orderTemplate.removeClass('inactive-order')
		orderTemplate.addClass('order')

		orderTemplate.attr('id', `order-${order.id}`)
		orderTemplate.attr('orderId', order.id)

        orderTemplate.find('h3.service-title').text(order.name)

        order.products.forEach(product => {
			orderTemplate.find('div.contentOrders').append(`<p class="textDashboard"><span class="numberOrder">${product.pivot.quantity}X </span>${product.name}</p>`)
        })

		orderTemplate.find('.collector').text(order.collector);
		orderTemplate.find('.total').text(order.total.toString().replace('.', ','));

		orderTemplate.find('.finish-button').on('click', function () {
			onFinish(order.id)
		})

		orderTemplate.find('.cancel-button').on('click', function () {
			onCancel(order.id)
		})

		orderTemplate.on('remove', () => {
			const rowId = orderTemplate.parent().attr('id').split('-')[1]

			onOrderRemoved(Number(rowId))
		})

        orderTemplate.appendTo(`#RowPedidos-${currentRowIndex}`)
    }

    const appendOrderRow = index => {
        $('#order-body').append(`<div class="row" id="RowPedidos-${index}"></div>`)
    }

	getOrders().then(orders => {
        let currentRowIndex = 0

        appendOrderRow(currentRowIndex)

        orders.forEach((order, index) => {
            if (index % 4 == 0) {
                currentRowIndex++;
                appendOrderRow(currentRowIndex)
            }

            appendOrder(currentRowIndex, order)
        })
    });

	const onFinish = orderId => {
		$.post(`/admin/order/${orderId}/finish`)
			.done(response => {
				if (!response)
					return alert('Ocorreu um erro :(')
				
				alert('Pedido finalizado!')
		
				const order = $(`#order-${orderId}`)

				order.hide('slow', () => order.remove())
			})
			

		console.log('Finalizando pedido ' + orderId)
	}

	const onCancel = orderId => {
		$.post(`/admin/order/${orderId}/cancel`)
			.done(cancelled => {
				if (!cancelled) 
					return alert('Ocorreu um erro :(')
				
				alert('Pedido cancelado!')

				order.hide('slow', () => order.remove())
			})

		console.log('Cancelando pedido ' + orderId)
	}

	const onOrderRemoved = rowId => {
		const hasPendingOrders = $('.order').length > 1 

		if (!hasPendingOrders)
			$('#empty-orders').css('visibility', 'visible');

		const nextRowExists = $(`#RowPedidos-${rowId + 1}`).length

		if (!nextRowExists)
			return

		const currentRow = $(`#RowPedidos-${rowId}`);

		const firstOrderFromNextRow = $(`#RowPedidos-${rowId + 1}`).find('.order')[0];

		currentRow.append(firstOrderFromNextRow)
	}

	const getProducts = () => {
		return new Promise(resolve => {
			$.ajax({
				url: '/admin/products',
				type: 'GET',
			}).done(resolve)
		});
	}

	const find = (array, property, value) => {
		for (const item of array) {
			if (item[property] == value)
				return item 
		}
		return null
	}

	const changeEditInputs = product => {
		const fillable = [
			'name',
			'ingredients',
			'price',
			'on_menu'
		]

		for (const attribute in product) {
			if (!fillable.includes(attribute))
				continue

			$(`#edit-${attribute}`).val(product[attribute])
		}

		$('#EditForm').attr('action', `/admin/products/${product.id}/edit`)
	}

	getProducts().then(products => {
		products.forEach((product, index) => {
			product.ingredients = product.ingredients.join(', ')

			$('#edit-select').append(`<option class="product-select" index="${index}" value="${product.id}">${product.name}</option>`)
		})

		$('#edit-select').on('change', () => {
				const option = $("#edit-select option:selected")

				const index = option.attr('index');

				let product = products[index]

				if (product.id != option.val())
					product = find(products, 'id', option.val())

				if (!product)
					return 

				changeEditInputs(product)
			})
	})

</script>

@stop

