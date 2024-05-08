@include('site.layout.header')
@php
    $usuario = Session::get('usuario');
@endphp
<!-- main content area -->
<div class="primary-content-area container content-padding grid-left-sidebar">
    @include('site.layout.menu')
    <div class="main-content-area">
        <div class="page-title" style="margin-bottom: 0px !important;">
            <h2 style="margin-bottom: 0px !important;">
                <span class="gradient-text">My NFT</span>
            </h2>
        </div>
        <div class="dashboard-wrapper">

        
            <div class="statement-list">
                <div class="statement">
                    <table class="content-table">
                        <thead>
                            <tr>
                                <th scope="col" class="heading-label">Date</th>
                                <th scope="col" class="heading-label">Item details</th>
                                <th scope="col" class="heading-label">Type</th>
                                <th scope="col" class="heading-label">Price</th>
                                <th scope="col" class="heading-label">Fee</th>
                                <th scope="col" class="heading-label">Tax</th>
                                <th scope="col" class="heading-label">Earnings</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td data-label="Date">
                                    <div class="date">Jul 17, 2021</div>
                                </td>
                                <td data-label="Item details">
                                    <div class="item-title gradient-text"><a href="05-product.html">Cryptoki NFT
                                            and Digital Market PSD Template</a>
                                    </div>
                                    <div class="license-details">Regular License - Invoice CRKT12354</div>
                                </td>
                                <td data-label="type" class="stat-value">Sale</td>
                                <td data-label="price" class="stat-value">$12.00</td>
                                <td data-label="fee" class="stat-value">-$1.00</td>
                                <td data-label="tax" class="stat-value">-$1.00</td>
                                <td data-label="earnings" class="green stat-value">$10.00</td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>
            </div>
            



        </div>

    </div>

</div>
<!-- main content area -->
@include('site.layout.footer')
