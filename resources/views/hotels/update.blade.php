<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier l'Hôtel</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;600;700&display=swap" rel="stylesheet">
    <style> body { font-family: 'Outfit', sans-serif; } </style>
</head>
<body class="bg-gradient-to-br from-orange-50 to-amber-50 min-h-screen pb-20">
    <nav class="bg-white border-b border-orange-100 py-6 mb-12 shadow-sm">
        <div class="max-w-3xl mx-auto px-4 flex justify-between items-center text-slate-800">
            <a href="{{ route('hotels.index') }}" class="text-orange-400 hover:text-orange-600 transition-all">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
            </a>
            <div class="text-center">
                <div class="inline-flex items-center gap-2 bg-orange-100 text-orange-700 px-3 py-1 rounded-full text-xs font-bold mb-1">
                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                    Espace Gerant
                </div>
                <span class="font-bold text-orange-900">Modifier le Profil</span>
            </div>
            <div class="w-6"></div>
        </div>
    </nav>
    <div class="max-w-2xl mx-auto px-4">
        <form action="{{ route('hotels.update', $hotel) }}" method="POST" class="space-y-10" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="bg-white rounded-[2.5rem] shadow-xl shadow-orange-200/50 border border-orange-50 p-10 space-y-8">
                <div>
                    <label class="text-xs font-black uppercase tracking-widest text-orange-500 mb-2 block">Nom actuel</label>
                    <input type="text" name="nom" value="{{ $hotel->nom }}" class="w-full text-2xl font-bold border-none focus:ring-0 p-0 outline-none text-slate-800" required>
                </div>
                <div>
                    <label class="text-xs font-black uppercase tracking-widest text-orange-500 mb-2 block">Adresse</label>
                    <input type="text" name="adresse" value="{{ $hotel->adresse }}" class="w-full font-semibold text-slate-600 border-none focus:ring-0 p-0 outline-none">
                </div>
                <hr class="border-orange-50">
                <div>
                    <label class="text-xs font-black uppercase tracking-widest text-orange-500 mb-2 block">Description</label>
                    <textarea name="description" rows="5" class="w-full text-lg text-slate-500 border-none focus:ring-0 p-0 outline-none resize-none">{{ $hotel->description }}</textarea>
                </div>
            </div>
            <div class="bg-orange-50 rounded-3xl p-8 border border-orange-100 flex items-center justify-between">
                <div class="text-sm font-bold text-orange-800 italic">Modifier la photo ?</div>
                <label for="image" class="px-6 py-2 bg-orange-500 text-white rounded-xl font-bold text-sm cursor-pointer hover:bg-orange-600 transition-all">
                    Choisir un fichier
                    <input id="image" name="image" type="file" class="sr-only">
                </label>
            </div>
            <button type="submit" class="w-full py-5 bg-gradient-to-r from-orange-500 to-orange-600 hover:from-orange-600 hover:to-orange-700 text-white font-black text-lg rounded-[2rem] shadow-2xl shadow-orange-200 transition-all">
                Mettre a jour les infos
            </button>
        </form>
    </div>
</body>
</html>
