<div id="advanced-filter">
    <div class="content-filter">
        <form id="advanced-filter-form">
            @csrf()
            @php
                $campaigns = getAllCampaigns();
                $merchant = (isset($merchant))?$merchant:'false';
            @endphp
            <select class="form-control" id="merchant-select" name="merchant-select">
                <option value="false">Chọn nhà cung cấp</option>
                @foreach($campaigns as $campaign)
                    <option {{ ($merchant==$campaign['merchant'])?'selected':'' }} value="{{ $campaign['merchant'] }}" data-merchant-link="{{ route('merchant-filter', $campaign['merchant']) }}">{{ $campaign['merchant'] }}</option>
                @endforeach
            </select>
            <button id="advanced-filter-submit" type="submit" class="btn btn-warning">Tìm khuyến mãi</button>
        </form>
    </div>
</div>