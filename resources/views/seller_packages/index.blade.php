@extends('backend.layouts.app')

@section('content')

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Helvetica Neue', sans-serif;
            background-color: #ffffff;
            color: #000;
            line-height: 1.6;
        }

        .container {
            max-width: 700px;
            margin: 0 auto;
            padding: 60px 40px;
        }

        .header {
            margin-bottom: 50px;
        }

        .title {
            font-size: 48px;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .billing-info {
            font-size: 16px;
            color: #666;
        }

        .plans-section {
            margin-bottom: 50px;
        }

        .plan {
            margin-bottom: 40px;
            padding-bottom: 30px;
            border-bottom: 1px solid #eee;
        }

        .plan:last-of-type {
            border-bottom: none;
            margin-bottom: 50px;
        }

        .plan-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 15px;
        }

        .plan-name {
            font-size: 24px;
            font-weight: 600;
            border-bottom: 2px dotted #000;
            display: inline-block;
            padding-bottom: 4px;
        }

        .plan-price {
            font-size: 32px;
            font-weight: 700;
            text-align: right;
        }

        .plan-price span {
            font-size: 16px;
            font-weight: 400;
            color: #666;
        }

        .plan-icons {
            display: flex;
            gap: 8px;
            flex-wrap: wrap;
        }

        .icon {
            width: 32px;
            height: 32px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
            font-weight: 500;
        }

        .icon-collab {
            background-color: #e8d5f2;
            color: #7c3aed;
        }

        .icon-design {
            background-color: #fed7aa;
            color: #ea580c;
        }

        .icon-code {
            background-color: #d1fae5;
            color: #059669;
        }

        .icon-component {
            background-color: #f3d8ff;
            color: #d946ef;
        }

        .icon-workflow {
            background-color: #bfdbfe;
            color: #0284c7;
        }

        .icon-globe {
            background-color: #dbeafe;
            color: #0284c7;
        }

        .icon-transform {
            background-color: #e5e7eb;
            color: #6b7280;
        }

        .cta-section {
            margin-bottom: 40px;
        }

        .select-plan-btn {
            width: 100%;
            padding: 18px 24px;
            background-color: #000;
            color: #fff;
            border: none;
            border-radius: 12px;
            font-size: 18px;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-bottom: 20px;
        }

        .select-plan-btn:hover {
            background-color: #333;
        }

        .contact-sales {
            text-align: center;
            text-decoration: underline;
            color: #000;
            font-size: 16px;
            cursor: pointer;
            transition: color 0.3s ease;
        }

        .contact-sales:hover {
            color: #666;
        }

        .info-section {
            margin-top: 50px;
        }

        .info-title {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 15px;
        }

        .choose-org {
            margin-bottom: 40px;
        }

        .choose-org-title {
            margin-bottom: 15px;
        }

        .choose-org-title strong {
            font-weight: 700;
        }

        .bullet-list {
            list-style: none;
            padding-left: 20px;
        }

        .bullet-list li {
            margin-bottom: 12px;
            position: relative;
            font-size: 16px;
        }

        .bullet-list li:before {
            content: "•";
            position: absolute;
            left: -20px;
            font-size: 20px;
        }

        .key-features {
            margin-top: 30px;
        }

        .feature-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 15px;
            font-size: 16px;
            gap: 12px;
        }

        .feature-check {
            width: 24px;
            height: 24px;
            background-color: #4ade80;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-weight: bold;
            flex-shrink: 0;
            margin-top: 2px;
        }

        @media (max-width: 600px) {
            .container {
                padding: 40px 20px;
            }

            .title {
                font-size: 36px;
            }

            .plan-header {
                flex-direction: column;
                gap: 10px;
            }

            .plan-price {
                text-align: left;
            }
        }
    </style>
<div class="aiz-titlebar mt-2 mb-3">
	<div class="row align-items-center">
		<div class="col-md-6">
			<h3 class="h3">{{translate('All Seller Packages')}}</h3>
		</div>
        @can('add_seller_package')
            <div class="col-md-6 text-md-right">
                <a href="{{ route('seller_packages.create') }}" class="btn btn-circle btn-info">
                    <span>{{translate('Add New Package')}}</span>
                </a>
            </div>
        @endcan
	</div>
</div>


<div class="row">
    @foreach ($seller_packages as $key => $seller_package)
        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="card">
                <div class="card-body text-center">
					<img alt="{{ translate('Package Logo')}}" src="{{ uploaded_asset($seller_package->logo) }}" class="mw-100 mx-auto mb-4" height="150px">
					<p class="mb-3 h6 fw-600">{{ $seller_package->getTranslation('name') }}</p>
                    <p class="h4">{{single_price($seller_package->amount)}}</p>
                    <p class="fs-15">{{translate('Product Upload Limit') }}:
                        <b class="text-bold">{{$seller_package->product_upload_limit}}</b>
                    </p>
					<p class="fs-15">{{translate('Package Duration') }}:
                        <b class="text-bold">{{$seller_package->duration}} {{translate('days')}}</b>
                    </p>
                    <div class="mar-top">
                        @can('edit_seller_package')
						    <a href="{{route('seller_packages.edit', ['id'=>$seller_package->id, 'lang'=>env('DEFAULT_LANGUAGE')] )}}" class="btn btn-sm btn-info">{{translate('Edit')}}</a>
                        @endcan
                        @can('delete_seller_package')
                            <a href="#" data-href="{{route('seller_packages.destroy', $seller_package->id)}}" class="btn btn-sm btn-danger confirm-delete">{{translate('Delete')}}</a>
                        @endcan                        
                    </div>
                </div>

                <div class="container">
                    <!-- Header -->
                    <div class="header">
                        <h1 class="title">Organization</h1>
                        <p class="billing-info">Billed annually</p>
                    </div>

                    <!-- Plans Section -->
                    <div class="plans-section">
                        <!-- Collab Seat -->
                        <div class="plan">
                            <div class="plan-header">
                                <div class="plan-name">Collab seat</div>
                                <div class="plan-price">$5<span>/mo</span></div>
                            </div>
                            <div class="plan-icons">
                                <div class="icon icon-collab">💬</div>
                                <div class="icon icon-design">🎨</div>
                            </div>
                        </div>

                        <!-- Dev Seat -->
                        <div class="plan">
                            <div class="plan-header">
                                <div class="plan-name">Dev seat</div>
                                <div class="plan-price">$25<span>/mo</span></div>
                            </div>
                            <div class="plan-icons">
                                <div class="icon icon-collab">💬</div>
                                <div class="icon icon-design">🎨</div>
                                <div class="icon icon-code">{'<>'}</div>
                                <div class="icon icon-component">✨</div>
                            </div>
                        </div>

                        <!-- Full Seat -->
                        <div class="plan">
                            <div class="plan-header">
                                <div class="plan-name">Full seat</div>
                                <div class="plan-price">$55<span>/mo</span></div>
                            </div>
                            <div class="plan-icons">
                                <div class="icon icon-collab">💬</div>
                                <div class="icon icon-design">🎨</div>
                                <div class="icon icon-code">{'<>'}</div>
                                <div class="icon icon-component">✨</div>
                                <div class="icon icon-workflow">🌊</div>
                                <div class="icon icon-globe">🌐</div>
                                <div class="icon icon-transform">⚙️</div>
                            </div>
                        </div>
                    </div>

                    <!-- CTA Section -->
                    <div class="cta-section">
                        <button class="select-plan-btn">Select plan</button>
                        <div class="contact-sales">Contact sales</div>
                    </div>

                    <!-- Info Section -->
                    <div class="info-section">
                        <div class="choose-org">
                            <div class="choose-org-title">
                                Choose <strong>Organization</strong> if you:
                            </div>
                            <ul class="bullet-list">
                                <li>Are a business that designs products across your organization</li>
                                <li>Need unlimited teams and basic security</li>
                                <li>Want to centralize assets, libraries, and workflows across departments</li>
                            </ul>
                        </div>

                        <div class="key-features">
                            <div class="info-title">Key features:</div>
                            <div class="feature-item">
                                <div class="feature-check">✓</div>
                                <div>Unlimited teams</div>
                            </div>
                            <div class="feature-item">
                                <div class="feature-check">✓</div>
                                <div>Shared libraries and fonts</div>
                            </div>
                            <div class="feature-item">
                                <div class="feature-check">✓</div>
                                <div>Centralized admin tools</div>
                            </div>
                            <div class="feature-item">
                                <div class="feature-check">✓</div>
                                <div>3500 credits/mo for Full seat</div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    @endforeach
</div>
@endsection

@section('modal')
    @include('modals.delete_modal')
@endsection
