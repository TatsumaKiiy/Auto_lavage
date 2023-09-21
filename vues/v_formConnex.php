<div class="form-container">
	<form action="index.php?uc=administrer&action=verifConnex" method="post">
		<div class="input-group">
			<label for="username">Identifiant:</label>
			<input type="text" name="username">
		</div>
		<div class="input-group">
			<label for="password">Mot de passe:</label>
			<input type="password" name="password">
		</div>
		<button type="submit" class="submit-button">Connecter</button>
	</form>
</div>

<style>
    .form-container {
        background-color: #f1f1f1;
        border: 1px solid #ccc;
        padding: 20px;
        width: 400px;
        margin: auto;
        margin-top: 50px;
        border-radius: 5px;
    }
    .input-group label {
        display: block;
        font-weight: bold;
        margin-bottom: 10px;
    }
    .input-group input {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border-radius: 3px;
        border: 1px solid #ccc;
    }
    .submit-button {
        background-color: #4CAF50;
        border: none;
        color: white;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin-bottom: 20px;
        border-radius: 3px;
        cursor: pointer;
    }
    .submit-button:hover {
        background-color: #45a049;
    }
</style>