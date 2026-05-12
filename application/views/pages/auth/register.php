<div class="bg-white min-h-screen flex items-center justify-center p-4">
    <div class="bg-white rounded-[3rem] max-w-6xl w-[550px] md:flex-row overflow-hidden ">
        <div class="flex-1 px-10 py-16 md:py-20 md:px-16 flex flex-col justify-center">
            <p class="text-3xl font-semibold text-primary mb-8">
                Register
            </p>
            <div class="w-[300px] mt-5 flex flex-col justify-start font-semibold">
                <?php if ($this->session->flashdata('message', 'error')) : ?>
                    <?= $this->session->flashdata('message', 'error'); ?>
                <?php endif; ?>
            </div>
            <form class="space-y-8" method="post" action="<?= base_url('register') ?>">
                <div class="relative">
                    <input class="w-full border border-gray-300 rounded-full py-3 px-5 pr-12 text-sm text-gray-500 placeholder-gray-400 focus:outline-none focus:ring-1 focus:ring-gray-300"
                        placeholder="nama"
                        type="text"
                        name="nama" />
                    <i aria-hidden="true" class="fas fa-user absolute right-4 top-1/2 -translate-y-1/2 text-gray-300 text-sm">
                    </i>
                    <span style="color: red;"><?php echo form_error('nama'); ?></span>

                </div>
                <div class="relative">
                    <input class="w-full border border-gray-300 rounded-full py-3 px-5 pr-12 text-sm text-gray-500 placeholder-gray-400 focus:outline-none focus:ring-1 focus:ring-gray-300"
                        placeholder="No Hp"
                        type="number"
                        name="no_hp" />
                    <i aria-hidden="true" class="fas fa-phone absolute right-4 top-1/2 -translate-y-1/2 text-gray-300 text-sm">
                    </i>
                    <span style="color: red;"><?php echo form_error('no_telepon'); ?></span>

                </div>
                <div class="relative">
                    <input class="w-full border border-gray-300 rounded-full py-3 px-5 pr-12 text-sm text-gray-500 placeholder-gray-400 focus:outline-none focus:ring-1 focus:ring-gray-300"
                        placeholder="Email"
                        type="email"
                        name="email" />
                    <i aria-hidden="true" class="fas fa-envelope absolute right-4 top-1/2 -translate-y-1/2 text-gray-300 text-sm">
                    </i>
                    <span style="color: red;"><?php echo form_error('email'); ?></span>

                </div>
                <div class="relative">
                    <input class="w-full border border-gray-300 rounded-full py-3 px-5 pr-12 text-sm text-gray-500 placeholder-gray-400 focus:outline-none focus:ring-1 focus:ring-gray-300"
                        placeholder="Password"
                        type="password"
                        name="password" />
                    <i aria-hidden="true" class="fas fa-eye absolute right-4 top-1/2 -translate-y-1/2 text-gray-300 text-sm">
                    </i>
                    <span style="color: red;"><?php echo form_error('password'); ?></span>
                </div>
                <button class="w-full bg-primary text-white rounded-full py-3 text-sm font-normal transition" type="submit">
                    Daftar
                </button>
            </form>
            <p class="text-center text-xs text-gray-500 mt-6">
                Dont have an account?
                <a class="font-semibold text-gray-900 hover:underline" href="<?= base_url('login') ?>">
                    Sign In
                </a>
            </p>
        </div>
    </div>
</div>