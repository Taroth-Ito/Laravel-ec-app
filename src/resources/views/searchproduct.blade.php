@extends('layouts.app')

@section('content')

<main>
	<div class="container">
		<div class="mx-auto">
			<h3 class="text-center">商品検索画面</h3>
			<!--検索フォーム-->
			<div class="row">
				<div class="col-sm">
					<form method="GET" action="{{ route('searchproduct')}}">
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">商品名</label>
							<!--入力-->
							<div class="col-sm-5">
								<input type="text" class="form-control" name="searchWord" value="{{ $searchWord }}">
							</div>
							<div class="col-sm-auto">
								<button type="submit" class="btn btn-primary ">検索</button>
							</div>
						</div>
						<!--プルダウンカテゴリ選択-->
						<div class="form-group row">
							<label class="col-sm-2">商品カテゴリ</label>
							<div class="col-sm-3">
								<select id="categoryId" name="categoryId" class="form-control" value="{{ $categoryId }}">
									<option value="">未選択</option>

									@foreach($categories as $id => $category_name)
									<option value="{{ $id }}">
										{{ $category_name }}
									</option>
									@endforeach
								</select>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>

		<!--検索結果テーブル 検索された時のみ表示する-->
		@if (!empty($products))
		<div class="productTable">
			<p>全{{ $products->count() }}件</p>
			<table class="table table-hover">
				<thead>
					<tr>
						<th style="width:50%">商品名</th>
						<th>商品カテゴリ</th>
						<th>価格</th>
					</tr>
				</thead>
				@foreach($products as $product)
				<tr>
					<td><a href=" {{ url('iteminfo',['id' => $product->id ]) }} ">{{ $product->product_name }}</a></td>
					<td>{{ $product->category->category_name }}</td>
					<td>{{ $product->price }}円</td>
				</tr>
				@endforeach
			</table>


			<div id="shop" class="shop row grid-container gutter-30" data-layout="fitRows">
				@foreach($products as $product)
				<div class="product col-lg-3 col-md-4 col-sm-6 col-12">
					<div class="grid-inner">
						<div class="product-image">
							<a href="{{ url('iteminfo',['id' => $product->id ]) }}"><img src="images/shop/pants/1-1.jpg"
									alt="Checked Short Dress"></a>
							<a href="{{ url('iteminfo',['id' => $product->id ]) }}"><img src="images/shop/pants/1.jpg"
									alt="Checked Short Dress"></a>
							{{-- <div class="sale-flash badge badge-secondary p-2">Out of Stock</div> --}}
							<div class="bg-overlay">
								<div class="bg-overlay-content align-items-end justify-content-between" data-hover-animate="fadeIn"
									data-hover-speed="400">
									{{-- <a href="#" class="btn btn-dark mr-2"><i class="icon-shopping-basket"></i></a> --}}
									<a href="include/ajax/shop-item.html" class="btn btn-dark" data-lightbox="ajax"><i
											class="icon-line-expand"></i></a>
								</div>
								<div class="bg-overlay-bg bg-transparent"></div>
							</div>
						</div>
						<div class="product-desc">
							<div class="product-title">
								<h3><a href="{{ url('iteminfo',['id' => $product->id ]) }}">{{ $product->product_name }}</a></h3>
							</div>
							<div class="product-price">{{ $product->price }}円</div>
							<div class="product-rating">
								<i class="icon-star3"></i>
								<i class="icon-star3"></i>
								<i class="icon-star3"></i>
								<i class="icon-star3"></i>
								<i class="icon-star-half-full"></i>
							</div>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
		<!--テーブルここまで-->
		<!--ページネーション-->
		<div class="d-flex justify-content-center">
			{{-- appendsでカテゴリを選択したまま遷移 --}}
			{{ $products->appends(request()->input())->links() }}
		</div>
		@endif
		<!--ページネーションここまで-->
	</div>
</main>

@endsection