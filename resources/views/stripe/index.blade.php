<form action="{{ route('stripe.checkout') }}" method="POST">
    @csrf
    <button type="submit">
        Pay 500 MAD
    </button>
</form>
