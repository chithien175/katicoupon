<div id="advanced-filter">
    <div class="content-filter">
        <form id="advanced-filter-form" action="{{ route('post-merchant') }}" method="post">
            @php
                $campaigns = getAllCampaigns();
            @endphp
            <select class="form-control" id="merchant-select" name="merchant-select">
                @foreach($campaigns['data'] as $campaign)
                    <option value="{{ $campaign['merchant'] }}">{{ $campaign['name'] }}</option>
                @endforeach
            </select>
            <button type="submit" class="btn btn-primary">Tìm kiếm</button>
        </form>
    </div>
</div>