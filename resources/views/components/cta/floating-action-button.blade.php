<div 
    x-data="{
        currentIcon: 0,
        icons: ['dollar', 'calculator', 'note'],
        interval: null,

        start() {
            this.interval = setInterval(() => {
                this.currentIcon =
                    (this.currentIcon + 1) % this.icons.length
            }, 3000)
        },

        stop() {
            clearInterval(this.interval)
        }
    }"
    x-init="start()"
    x-on:mouseenter="stop()"
    x-on:mouseleave="start()"
    class="fixed right-6 bottom-6 z-50">
    
    <a
        href="#contato"
        aria-label="Solicitar orçamento"
        class="
            group
            flex h-14 w-14 items-center 
            overflow-hidden
            rounded-full
            border-2 border-10
            bg-60
            text-30
            shadow-lg
            transition-all duration-300 ease-out
            hover:w-56
        ">

        <!-- Ícone -->
        <span
            class="
                relative
                flex size-13 shrink-0
                items-center justify-center
                text-10
            ">
            <!-- Cifrão -->
            <svg x-show="currentIcon === 0" x-transition:enter="transition ease-out duration-200"
                x-transition:enter-start="opacity-0 scale-75" x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-150 absolute"
                x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-75"
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8"
                stroke="currentColor" class="size-5">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 3v18m4.5-14.5c-.8-.8-2.2-1.5-4.5-1.5-2.5 0-4 1.2-4 3 0 4.5 8.5 2 8.5 7 0 1.8-1.5 3-4.5 3-2.2 0-4-.7-5-1.8" />
            </svg>

            <!-- Calculadora -->
            <svg x-show="currentIcon === 1" x-transition:enter="transition ease-out duration-200"
                x-transition:enter-start="opacity-0 scale-75" x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-150 absolute"
                x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-75"
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8"
                stroke="currentColor" class="size-5">
                <rect width="15" height="18" x="4.5" y="3" rx="2" />

                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M8 7.5h8M8 12h.01M12 12h.01M16 12h.01M8 16h.01M12 16h.01M16 16h.01" />
            </svg>

            <!-- Bloco de notas -->
            <svg x-show="currentIcon === 2" x-transition:enter="transition ease-out duration-200"
                x-transition:enter-start="opacity-0 scale-75" x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-150 absolute"
                x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-75"
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8"
                stroke="currentColor" class="size-5">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M9 4.5h6M9 3h6a1.5 1.5 0 0 1 1.5 1.5V6h1.5A1.5 1.5 0 0 1 19.5 7.5v13A1.5 1.5 0 0 1 18 22H6a1.5 1.5 0 0 1-1.5-1.5v-13A1.5 1.5 0 0 1 6 6h1.5V4.5A1.5 1.5 0 0 1 9 3Z" />

                <path stroke-linecap="round" d="M8 10h8M8 14h8M8 18h5" />
            </svg>
        </span>

        <!-- Texto -->
        <span
            class="
                whitespace-nowrap
                pr-5
                font-body
                text-md font-semibold
                text-30
                opacity-0
                transition-opacity duration-200
                group-hover:opacity-100
            ">
            Solicitar orçamento
        </span>
    </a>
</div>
