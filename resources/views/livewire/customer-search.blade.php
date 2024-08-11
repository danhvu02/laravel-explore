<div class="customer-search">
    <input wire:model="keyword" wire:keyup.debounce="search" autofocus placeholder="Search" />
    @if ($keyword)
        <ul>
            @forelse ($this->highlightedCustomers as $customer)
                <li>
                    <div>{!! $customer['name'] !!}</div>
                    <div>{!! $customer['email'] !!}</div>
                    <div>{!! $customer['address'] !!}</div>
                </li>
            @empty
                <li>
                    No matches found
                </li>
            @endforelse
        </ul>
    @endif
</div>
