<div {{ $attributes->merge(['class' => $id]) }}></div>
<script type="text/javascript">
    Lnbits.Checkout.open(@json($options()));
</script>
