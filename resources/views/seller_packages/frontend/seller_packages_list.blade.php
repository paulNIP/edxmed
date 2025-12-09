@extends('seller.layouts.app')

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

@section('panel_content')
    <section class="py-8 bg-soft-primary">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 mx-auto text-center">
                    <h3 class="h1 mb-0 fw-700">{{ translate('Premium Packages for Sellers') }}</h3>
                </div>
            </div>
        </div>
    </section>

    <section class="py-4 py-lg-5">
        <div class="container">
            <div class="row row-cols-xxl-4 row-cols-lg-3 row-cols-md-2 row-cols-1 gutters-10 justify-content-center">
                @foreach ($seller_packages as $key => $seller_package)
                    <!-- <div class="col">
                        <div class="card overflow-hidden">
                            <div class="card-body">
                                <div class="text-center mb-4 mt-3">
                                    <img class="mw-100 mx-auto mb-4" src="{{ uploaded_asset($seller_package->logo) }}"
                                        height="100">
                                    <h5 class="mb-3 h5 fw-600">{{ $seller_package->getTranslation('name') }}</h5>
                                </div>
                                <ul class="list-group list-group-raw fs-15 mb-5">
                                    <li class="list-group-item py-2">
                                        <i class="las la-check text-success mr-2"></i>
                                        {{ $seller_package->product_upload_limit }} {{ translate('Product Upload Limit') }}
                                    </li>
                                </ul>
                                <div class="mb-5 d-flex align-items-center justify-content-center">
                                    @if ($seller_package->amount == 0)
                                        <span class="fs-30 fw-600 lh-1 mb-0">{{ translate('Free') }}</span>
                                    @else
                                        <span
                                            class="fs-30 fw-600 lh-1 mb-0">{{ single_price($seller_package->amount) }}</span>
                                    @endif
                                    <span
                                        class="text-secondary border-left ml-2 pl-2">{{ $seller_package->duration }}<br>{{ translate('Days') }}</span>
                                </div>

                                <div class="text-center">
                                    @if ($seller_package->amount == 0)
                                        <button class="btn btn-primary fw-600"
                                            onclick="get_free_package({{ $seller_package->id }})">{{ translate('Free Package') }}</button>
                                    @else
                                        @if (addon_is_activated('offline_payment'))
                                            <button class="btn btn-primary fw-600"
                                                onclick="select_payment_type({{ $seller_package->id }})">{{ translate('Purchase Package') }}</button>
                                        @else
                                            <button class="btn btn-primary fw-600"
                                                onclick="show_price_modal({{ $seller_package->id }})">{{ translate('Purchase Package') }}</button>
                                        @endif
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div> -->
                    
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


                @endforeach
            </div>
        </div>
    </section>
@endsection

@section('modal')
    <!-- Select Payment Type Modal -->
    <div class="modal fade" id="select_payment_type_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{ translate('Select Payment Type') }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="package_id" name="package_id" value="">
                    <div class="row">
                        <div class="col-md-2">
                            <label>{{ translate('Payment Type') }}</label>
                        </div>
                        <div class="col-md-10">
                            <div class="mb-3">
                                <select class="form-control aiz-selectpicker" onchange="payment_type(this.value)"
                                    data-minimum-results-for-search="Infinity">
                                    <option value="">{{ translate('Select One') }}</option>
                                    <option value="online">{{ translate('Online payment') }}</option>
                                    <option value="offline">{{ translate('Offline payment') }}</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group text-right">
                        <button type="button" class="btn btn-sm btn-primary transition-3d-hover mr-1"
                            id="select_type_cancel" data-dismiss="modal">{{ translate('Cancel') }}</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Online payment Modal-->
    <div class="modal fade" id="price_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{ translate('Purchase Your Package') }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <form class="" id="package_payment_form" action="{{ route('seller_packages.purchase') }}"
                    method="post">
                    @csrf
                    <input type="hidden" name="seller_package_id" value="">
                    <div class="modal-body" style="overflow-y: unset;">
                        <div class="row">
                            <div class="col-md-2">
                                <label>{{ translate('Payment Method') }}</label>
                            </div>
                            <div class="col-md-10">
                                <div class="mb-3">
                                    <select class="form-control aiz-selectpicker" data-live-search="true" name="payment_option">
                                        @include('partials.online_payment_options')
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group text-right">
                            <button type="button" class="btn btn-sm btn-secondary transition-3d-hover mr-1"
                                data-dismiss="modal">{{ translate('cancel') }}</button>
                            <button type="submit"
                                class="btn btn-sm btn-primary transition-3d-hover mr-1">{{ translate('Confirm') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- offline payment Modal -->
    <div class="modal fade" id="offline_seller_package_purchase_modal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title strong-600 heading-5">{{ translate('Offline Package Payment') }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div id="offline_seller_package_purchase_modal_body"></div>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <script type="text/javascript">
        function select_payment_type(id) {
            $('input[name=package_id]').val(id);
            $('#select_payment_type_modal').modal('show');
        }

        function payment_type(type) {
            var package_id = $('#package_id').val();
            if (type == 'online') {
                $("#select_type_cancel").click();
                show_price_modal(package_id);
            } else if (type == 'offline') {
                $("#select_type_cancel").click();
                $.post('{{ route('seller.offline_seller_package_purchase_modal') }}', {
                    _token: '{{ csrf_token() }}',
                    package_id: package_id
                }, function(data) {
                    $('#offline_seller_package_purchase_modal_body').html(data);
                    $('#offline_seller_package_purchase_modal').modal('show');
                });
            }
        }

        function show_price_modal(id) {
            $('input[name=seller_package_id]').val(id);
            $('#price_modal').modal('show');
        }

        function get_free_package(id) {
            $('input[name=seller_package_id]').val(id);
            $('#package_payment_form').submit();
        }
    </script>
@endsection
