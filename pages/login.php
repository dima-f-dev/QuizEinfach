<h1>Anmeldung</h1>
    
<?php if (!empty($error)): ?>
    <p class="mt-4 p-3 rounded bg-amber-100 text-amber-800"><?= htmlspecialchars($error) ?></p>
<?php endif; ?>

<form method="POST" action="/login">
    <label for="username" class="block text-sm/6 font-medium text-gray-900">Benutzername:</label>
    <input id="username" type="text" name="username" class="block border border-slate-300 rounded-lg text-gray-900 placeholder:text-gray-400 focus:outline-none " required>
    
    <label for="password" class="block text-sm/6 font-medium text-gray-900">Passwort:</label>
    <input id="password" type="password" name="password" class="block border border-slate-300 rounded-lg text-gray-900 placeholder:text-gray-400 focus:outline-none " required>
    
    <button type="submit" class="mt-4 bg-emerald-600 hover:bg-emerald-700 text-white font-semibold px-6 py-2.5 rounded-lg transition-colors cursor-pointer w-full md:w-auto">Einloggen</button>
</form>