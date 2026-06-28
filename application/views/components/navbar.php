<div class="w-full bg-[#6B2FA0] text-white py-4 flex items-center justify-between px-6 text-xs font-bold tracking-wide"></div>

<nav class="w-full bg-[#F5EFE8] px-8 py-4 flex items-center justify-between" style="font-family: 'Nunito', sans-serif;">
    <div class="text-3xl font-black text-[#2C1A0E] tracking-tight" style="font-family: 'Fredoka One', cursive;">
        CV MyBakery<span class="text-[#FF6B35]">.</span>
    </div>
    <div class="hidden md:flex items-center gap-8 text-sm font-bold text-[#2C1A0E] tracking-widest uppercase">
        <a href="#" class="hover:text-[#FF6B35] transition-colors">Beranda</a>
        <a href="#tentang" class="hover:text-[#FF6B35] transition-colors">Tentang</a>
        <a href="#kontak" class="hover:text-[#FF6B35] transition-colors">Kontak</a>
    </div>
    <div class="flex items-center gap-3">
        <?php if ($this->session->userdata('id_user')) : ?>

            <a href="<?= base_url($this->session->userdata('role') . '/dashboard') ?>"
                class="bg-[#F5D800] text-[#2C1A0E] font-black text-xs px-3 py-1 rounded-full uppercase tracking-wider hover:bg-[#e6c800] transition-colors border-2 border-[#2C1A0E]"
                style="font-family: 'Nunito', sans-serif;">
                Dashboard
            </a>

        <?php else : ?>

            <a href="<?= base_url('login') ?>"
                class="bg-[#F5D800] text-[#2C1A0E] font-black text-xs px-3 py-1 rounded-full uppercase tracking-wider hover:bg-[#e6c800] transition-colors border-2 border-[#2C1A0E]"
                style="font-family: 'Nunito', sans-serif;">
                Login
            </a>

        <?php endif; ?>
    </div>
</nav>