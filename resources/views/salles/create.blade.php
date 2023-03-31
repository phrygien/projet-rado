<x-app-layout title="Salle-Creation" is-header-blur="true">
    <main class="main-content w-full px-[var(--margin-x)] pb-8">
        <div class="flex items-center space-x-4 py-5 lg:py-6">
          <h2
            class="text-xl font-medium text-slate-800 dark:text-navy-50 lg:text-2xl"
          >
            Gestions
          </h2>
          <div class="hidden h-full py-1 sm:flex">
            <div class="h-full w-px bg-slate-300 dark:bg-navy-600"></div>
          </div>
          <ul class="hidden flex-wrap items-center space-x-2 sm:flex">
            <li class="flex items-center space-x-2">
              <a
                class="text-primary transition-colors hover:text-primary-focus dark:text-accent-light dark:hover:text-accent"
                href="#"
                >Salles</a
              >
              <svg
                x-ignore
                xmlns="http://www.w3.org/2000/svg"
                class="h-4 w-4"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M9 5l7 7-7 7"
                />
              </svg>
            </li>
            <li>Création salle</li>
          </ul>
        </div>

        <form method="POST" action="{{ route('gestions/store_salle') }}">
            @csrf
        <div class="grid grid-cols-12 gap-4 sm:gap-5 lg:gap-6">
          <div class="col-span-12 sm:col-span-8">
            <div class="card p-4 sm:p-5">
              <p
                class="text-base font-medium text-slate-700 dark:text-navy-100"
              >
                Shipping Address
              </p>
              <div class="mt-4 space-y-4">
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                  <label class="block">
                    <span>Nom de salle</span>
                    <span class="relative mt-1.5 flex">
                      <input name="designe"
                        class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                        placeholder="Entrer nom de la salle"
                        type="text" required
                      />
                      <span
                        class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent"
                      >
                        <i class="fa-solid fa-city text-base"></i>
                      </span>
                    </span>
                  </label>
                  <br>
                  <label class="inline-flex items-center space-x-2">
                    <input
                    class="form-radio is-outline h-5 w-5 rounded-full border-slate-400/70 bg-slate-100 before:bg-slate-500 checked:border-slate-500 hover:border-slate-500 focus:border-slate-500 dark:border-navy-500 dark:bg-navy-900 dark:before:bg-navy-200 dark:checked:border-navy-200 dark:hover:border-navy-200 dark:focus:border-navy-200"
                    name="occupation"
                    type="radio" value="0"
                    />
                    <p>Disponible</p>
                </label>
                <label class="inline-flex items-center space-x-2">
                    <input
                    class="form-radio is-outline h-5 w-5 rounded-full border-slate-400/70 bg-slate-100 before:bg-primary checked:border-primary hover:border-primary focus:border-primary dark:border-navy-500 dark:bg-navy-900 dark:before:bg-accent dark:checked:border-accent dark:hover:border-accent dark:focus:border-accent"
                    name="occupation"
                    type="radio" value="1"
                    />
                    <p>Occupé</p>
                </label>
                </div>
                <div class="flex justify-end space-x-2">
                  <a href="{{ route('gestions/classe') }}"
                    class="btn space-x-2 bg-slate-150 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="h-5 w-5"
                      viewBox="0 0 20 20"
                      fill="currentColor"
                    >
                      <path
                        fill-rule="evenodd"
                        d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z"
                        clip-rule="evenodd"
                      />
                    </svg>
                    <span>annuler</span>
                    </a>
                  <button type="submit"
                    class="btn space-x-2 bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90"
                  >
                    <span>enregistrer</span>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
        </form>
      </main>
</x-app-layout>
