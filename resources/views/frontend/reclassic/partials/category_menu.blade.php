<div class="aiz-category-menu bg-white rounded-0 border-top" id="category-sidebar" style="width:270px;">
    <ul class="list-unstyled categories no-scrollbar mb-0 text-left">
        @foreach (get_level_zero_categories()->take(12) as $key => $category)
            @php
                $category_name = $category->getTranslation('name');
            @endphp
            @if ($category_name === 'Diagnostic Equipment')
                <li class="category-nav-element border border-top-0" data-id="{{ $category->id }}">
                    <a href="{{ route('products.category', $category->slug) }}"
                        class="text-truncate text-dark px-4 fs-14 d-block hov-column-gap-1"> 
                        <span class="cat-name has-transition">🔍 Diagnostic Equipment</span> 
                    </a> 
                        
                    <div class="sub-cat-menu more c-scrollbar-light border p-4 shadow-none">
                        <div class="c-preloader text-center absolute-center">
                            <i class="las la-spinner la-spin la-3x opacity-70"></i>
                        </div>
                    </div>

                </li>
            @elseif ($category_name === 'Surgical Instruments')
                <li class="category-nav-element border border-top-0" data-id="{{ $category->id }}">
                    <a href="{{ route('products.category', $category->slug) }}"
                        class="text-truncate text-dark px-4 fs-14 d-block hov-column-gap-1">  
                        <span class="cat-name has-transition">🏥 Surgical Instruments</span>
                    </a> 
                        
                    <div class="sub-cat-menu more c-scrollbar-light border p-4 shadow-none">
                        <div class="c-preloader text-center absolute-center">
                            <i class="las la-spinner la-spin la-3x opacity-70"></i>
                        </div>
                    </div>

                </li>

            @elseif ($category_name === 'Personal Protective Equipment (PPE)')
                <li class="category-nav-element border border-top-0" data-id="{{ $category->id }}">
                    <a href="{{ route('products.category', $category->slug) }}"
                        class="text-truncate text-dark px-4 fs-14 d-block hov-column-gap-1">  
                        <span class="cat-name has-transition">🧤 Personal Protective Equipment (PPE)</span>
                    </a> 
                        
                    <div class="sub-cat-menu more c-scrollbar-light border p-4 shadow-none">
                        <div class="c-preloader text-center absolute-center">
                            <i class="las la-spinner la-spin la-3x opacity-70"></i>
                        </div>
                    </div>

                </li>

            @elseif ($category_name === 'Rehab Equipment')
                

                <li class="category-nav-element border border-top-0" data-id="{{ $category->id }}">
                    <a href="{{ route('products.category', $category->slug) }}"
                        class="text-truncate text-dark px-4 fs-14 d-block hov-column-gap-1"> 
                         <span class="cat-name has-transition">♿ Rehab Equipment</span>
                        
                    </a> 
                        
                    <div class="sub-cat-menu more c-scrollbar-light border p-4 shadow-none">
                        <div class="c-preloader text-center absolute-center">
                            <i class="las la-spinner la-spin la-3x opacity-70"></i>
                        </div>
                    </div>

                </li>

            @elseif ($category_name === 'Consumables')
                
                <li class="category-nav-element border border-top-0" data-id="{{ $category->id }}">
                    <a href="{{ route('products.category', $category->slug) }}"
                        class="text-truncate text-dark px-4 fs-14 d-block hov-column-gap-1"> 
                        <span class="cat-name has-transition">🧪 Consumables</span> 
                    </a> 
                        
                    <div class="sub-cat-menu more c-scrollbar-light border p-4 shadow-none">
                        <div class="c-preloader text-center absolute-center">
                            <i class="las la-spinner la-spin la-3x opacity-70"></i>
                        </div>
                    </div>

                </li>

            @elseif ($category_name === 'Hospital Furniture')
                
                <li class="category-nav-element border border-top-0" data-id="{{ $category->id }}">
                    <a href="{{ route('products.category', $category->slug) }}"
                        class="text-truncate text-dark px-4 fs-14 d-block hov-column-gap-1"> 
                        <span class="cat-name has-transition">🛏️ Hospital Furniture</span> 
                    </a> 
                        
                    <div class="sub-cat-menu more c-scrollbar-light border p-4 shadow-none">
                        <div class="c-preloader text-center absolute-center">
                            <i class="las la-spinner la-spin la-3x opacity-70"></i>
                        </div>
                    </div>

                </li>

            @elseif ($category_name === 'Laboratory Equipment')
                
                <li class="category-nav-element border border-top-0" data-id="{{ $category->id }}">
                    <a href="{{ route('products.category', $category->slug) }}"
                        class="text-truncate text-dark px-4 fs-14 d-block hov-column-gap-1">  
                        <span class="cat-name has-transition">🔬 Laboratory Equipment</span>
                    </a> 
                        
                    <div class="sub-cat-menu more c-scrollbar-light border p-4 shadow-none">
                        <div class="c-preloader text-center absolute-center">
                            <i class="las la-spinner la-spin la-3x opacity-70"></i>
                        </div>
                    </div>

                </li>

            @elseif ($category_name === 'Emergency Products')
                
                <li class="category-nav-element border border-top-0" data-id="{{ $category->id }}">
                    <a href="{{ route('products.category', $category->slug) }}"
                        class="text-truncate text-dark px-4 fs-14 d-block hov-column-gap-1"> 
                        <span class="cat-name has-transition">🚑 Emergency Products</span> 
                    </a> 
                        
                    <div class="sub-cat-menu more c-scrollbar-light border p-4 shadow-none">
                        <div class="c-preloader text-center absolute-center">
                            <i class="las la-spinner la-spin la-3x opacity-70"></i>
                        </div>
                    </div>

                </li>

            @elseif ($category_name === 'Monitoring Equipment')
                
                <li class="category-nav-element border border-top-0" data-id="{{ $category->id }}">
                    <a href="{{ route('products.category', $category->slug) }}"
                        class="text-truncate text-dark px-4 fs-14 d-block hov-column-gap-1"> 
                        <span class="cat-name has-transition">📊 Monitoring Equipment</span> 
                    </a> 
                        
                    <div class="sub-cat-menu more c-scrollbar-light border p-4 shadow-none">
                        <div class="c-preloader text-center absolute-center">
                            <i class="las la-spinner la-spin la-3x opacity-70"></i>
                        </div>
                    </div>

                </li>

            @elseif ($category_name === 'Pharmaceuticals')
                
                <li class="category-nav-element border border-top-0" data-id="{{ $category->id }}">
                    <a href="{{ route('products.category', $category->slug) }}"
                        class="text-truncate text-dark px-4 fs-14 d-block hov-column-gap-1">  
                        <span class="cat-name has-transition">💊 Pharmaceuticals</span>
                    </a> 
                        
                    <div class="sub-cat-menu more c-scrollbar-light border p-4 shadow-none">
                        <div class="c-preloader text-center absolute-center">
                            <i class="las la-spinner la-spin la-3x opacity-70"></i>
                        </div>
                    </div>

                </li>

            @elseif ($category_name === 'Home Health Care')
                

                <li class="category-nav-element border border-top-0" data-id="{{ $category->id }}">
                    <a href="{{ route('products.category', $category->slug) }}"
                        class="text-truncate text-dark px-4 fs-14 d-block hov-column-gap-1">  
                        <span class="cat-name has-transition">🏡 Home Health Care</span>
                    </a> 
                        
                    <div class="sub-cat-menu more c-scrollbar-light border p-4 shadow-none">
                        <div class="c-preloader text-center absolute-center">
                            <i class="las la-spinner la-spin la-3x opacity-70"></i>
                        </div>
                    </div>

                </li>

            @elseif ($category_name === 'Orthopedic Devices')
                

                <li class="category-nav-element border border-top-0" data-id="{{ $category->id }}">
                    <a href="{{ route('products.category', $category->slug) }}"
                        class="text-truncate text-dark px-4 fs-14 d-block hov-column-gap-1">  
                        <span class="cat-name has-transition">🦿 Orthopedic Devices</span>
                    </a> 
                        
                    <div class="sub-cat-menu more c-scrollbar-light border p-4 shadow-none">
                        <div class="c-preloader text-center absolute-center">
                            <i class="las la-spinner la-spin la-3x opacity-70"></i>
                        </div>
                    </div>

                </li>

            @else

            @endif
        @endforeach
    </ul>
</div>
