<html>
<body>
<h1>Serviço da transportadora</h1>
<form action="{{ route('register') }}" method="POST">
    <select name="order">
        <option value="">Qual o envio?</option>
        <option>ORD-202109172</option>
        <option>ORD-202109171</option>
    </select>

    <select name="status" required>
        <option value="">Qual o status do envio?</option>
        <option value="posted">Postado</option>
        <option value="delivered">Delivered</option>
    </select>

    <button type="submit">Atualizar</button>
</form>
</body>
</html>
