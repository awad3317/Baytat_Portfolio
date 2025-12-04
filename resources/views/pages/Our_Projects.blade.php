<!-- start our projects  -->
<div class="projects" id="projects">
    <div class="main-heading">
        <div class="address">
            <h2 data-aos="fade-left">أعمالنا</h2>
            <img src="{{ asset('assets/images/our service icon.svg') }}" alt="أعمالنا" data-aos="fade-right">
        </div>
    </div>

    <div class="container">
        <div class="container-services">
            @if (!empty($projects) && count($projects) > 0)
                @foreach ($projects as $project)
                    <div class="card" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                        <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}">
                        <div class="text">
                            <h3>{{ $project->title }}</h3>
                            <p>{{ Str::limit($project->description, 120) }}</p>
                            <p><strong>النوع:</strong> {{ $project->type }}</p>
                            <p><strong>الحالة:</strong>
                                @if ($project->status === 'completed')
                                    <span class="status completed">مكتمل</span>
                                @elseif($project->status === 'in_progress')
                                    <span class="status in-progress">قيد التنفيذ</span>
                                @else
                                    <span class="status unknown">غير محدد</span>
                                @endif
                            </p>
                            @if ($project->link)
                                <a href="{{ $project->link }}" target="_blank" class="btn btn-primary">عرض العمل</a>
                            @endif
                        </div>
                    </div>
                @endforeach
            @else
                <div class="no-projects">
                    <div class="alert" role="alert">
                        <i class="fas fa-info-circle me-2"></i> لا توجد أعمال متاحة حالياً
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
<!-- end our projects  -->