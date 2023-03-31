<x-app-layout title="Salles" is-sidebar-open="true" is-header-blur="true">
    <main class="main-content w-full px-[var(--margin-x)] pb-8">
        <div class="flex items-center space-x-4 py-5 lg:py-6">
          <h2
            class="text-xl font-medium text-slate-800 dark:text-navy-50 lg:text-2xl"
          >
            Gestion
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
            <li>Liste salles</li>
          </ul>
        </div>
        <div class="grid grid-cols-1 gap-4 sm:gap-5 lg:gap-6">
          <!-- Users Table -->
          <div x-data="{isFilterExpanded:false}">
            <div class="flex items-center justify-between">
              <h2
                class="text-base font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100"
              >
                Gerer salle de classe
              </h2>
              <div class="flex">

                <a href="{{ route('gestions/create_salle') }}"
                  class="mr-2 btn bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90"
                >
                Ajouter salle
                </a>
              </div>
            </div>
            @if (\Session::has('success'))
        <div  class="alert flex bg-success/10 py-4 px-4 text-success dark:bg-success/15 sm:px-5">
            <p>{{ \Session::get('success') }}</p>
        </div>
        @endif

            <div class="card mt-3">
              <div class="is-scrollbar-hidden min-w-full overflow-x-auto">
                <table class="is-hoverable w-full text-left">
                  <thead>
                    <tr>
                      <th
                        class="whitespace-nowrap rounded-tl-lg bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5"
                      >
                        ID Salle
                      </th>
                      <th
                        class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5"
                      >
                        Nom de salle
                      </th>
                      <th
                        class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5"
                      >
                        Occupation
                      </th>
                      <th width="220px"
                        class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5"
                      >
                        Actions
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($salles as $salle)
                    <tr
                      class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500"
                    >
                      <td class="whitespace-nowrap px-4 py-3 sm:px-5">ID - {{ $salle->id }}</td>
                      <td
                        class="whitespace-nowrap px-4 py-3 font-medium text-slate-700 dark:text-navy-100 sm:px-5"
                      >
                        {{ $salle->designe }}
                      </td>
                      <td
                        class="whitespace-nowrap px-4 py-3 font-medium text-slate-700 dark:text-navy-100 sm:px-5"
                      >
                      @if($salle->occupation == 1)
                      <div
                            class="badge bg-secondary/10 text-secondary dark:bg-secondary-light/15 dark:text-secondary-light"
                        >
                            Salle occupé
                        </div>
                        @else
                        <div class="badge bg-info/10 text-info dark:bg-info/15">Salle disponible</div>
                        @endif
                      </td>
                      <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                      <button
                        class="btn bg-secondary font-medium text-white hover:bg-secondary-focus focus:bg-secondary-focus active:bg-secondary-focus/90"
                    >
                        modifier
                    </button>
                    <a href="{{ url('gestions/delete_salle',$salle->id )}}"
                        class="btn bg-error font-medium text-white hover:bg-error-focus focus:bg-error-focus active:bg-error-focus/90"
                    >
                        supprimer
                    </a>
                    </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>

            <div class="m-2">
            {{ $salles->links() }}
            </div>
            </div>
          </div>
        </div>
      </main>
</x-app-layout>
