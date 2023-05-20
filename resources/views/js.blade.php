@php($vendor = ['vendor' => (int) config('cashier.vendor_id')])

<script src="https://cdn.paddle.com/paddle/paddle.js"></script>
<script type="text/javascript">
    @if (config('cashier.sandbox'))
        Lnbits.Environment.set('sandbox');
    @endif

    Lnbits.Setup(@json($vendor));
</script>
