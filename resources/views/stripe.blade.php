<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stripe Payment</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.1.2/tailwind.min.css">
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
        <h1 class="text-2xl font-bold mb-6 text-center">Make a Payment</h1>
        <form id="payment-form" action="{{ route('payments.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="card-element" class="block text-sm font-medium text-gray-700">Credit or Debit Card</label>
                <div id="card-element" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"></div>
            </div>
            <button id="submit-button" class="w-full py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Pay</button>
        </form>
    </div>
    <script src="https://js.stripe.com/v3/"></script>
    <script>
        var stripe = Stripe('{{ env('STRIPE_TEST_PK') }}');
        var elements = stripe.elements();
        var card = elements.create('card');
        card.mount('#card-element');

        var form = document.getElementById('payment-form');
        form.addEventListener('submit', async function(event) {
            event.preventDefault();
            const {paymentIntent, error} = await stripe.confirmCardPayment('{{ env('STRIPE_TEST_SK') }}', {
                payment_method: {
                    card: card,
                }
            });

            if (error) {
                console.log(error.message);
            } else {
                form.submit();
            }
        });
    </script>
</body>
</html>
