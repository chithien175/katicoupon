<div id="advanced-filter">
    <div class="content-filter">
        <form id="advanced-filter-form">
            @csrf()
            @php
                $campaigns = getAllCampaigns();
            @endphp
            <select class="form-control" id="merchant-select" name="merchant-select">
                <option value="false">Chọn nhà cung cấp cần tìm</option>
                @foreach($campaigns['data'] as $campaign)
                    <option value="{{ $campaign['merchant'] }}" data-merchant-link="{{ route('merchant-filter', $campaign['merchant']) }}">{{ $campaign['name'] }}</option>
                @endforeach
            </select>
            <button id="advanced-filter-submit" type="submit" class="btn btn-warning">Tìm kiếm</button>
        </form>
    </div>
</div>