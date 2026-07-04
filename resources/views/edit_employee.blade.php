<x-layout>
    <section class="employee-management">
        <header class="em-header">
            <h2>Edit Employee</h2>
            <a href="/employees" class="filter-btn">Back to List</a>
        </header>

        <div style="background: white; padding: 2rem; border-radius: 8px; max-width: 600px; margin: 2rem auto; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
            <form action="/employees/{{ $employee->id }}" method="POST">
                @csrf
                @method('PUT')

                <div style="margin-bottom: 1rem;">
                    <label for="name" style="display: block; margin-bottom: 0.5rem;">Full Name</label>
                    <input type="text" name="name" id="name" value="{{ old('name', $employee->user->name) }}" required style="width: 100%; padding: 0.5rem; border: 1px solid #ddd; border-radius: 4px;">
                </div>

                <div style="margin-bottom: 1rem;">
                    <label for="email" style="display: block; margin-bottom: 0.5rem;">Email Address (Login ID)</label>
                    <input type="email" name="email" id="email" value="{{ old('email', $employee->user->email) }}" required style="width: 100%; padding: 0.5rem; border: 1px solid #ddd; border-radius: 4px;">
                </div>

                <div style="margin-bottom: 1rem;">
                    <label for="password" style="display: block; margin-bottom: 0.5rem;">Password <small>(Leave blank to keep current)</small></label>
                    <input type="password" name="password" id="password" style="width: 100%; padding: 0.5rem; border: 1px solid #ddd; border-radius: 4px;">
                </div>

                <div style="margin-bottom: 1rem;">
                    <label for="job_title" style="display: block; margin-bottom: 0.5rem;">Job Title</label>
                    <input type="text" name="job_title" id="job_title" value="{{ old('job_title', $employee->job_title) }}" required style="width: 100%; padding: 0.5rem; border: 1px solid #ddd; border-radius: 4px;">
                </div>

                <div style="margin-bottom: 1rem;">
                    <label for="department" style="display: block; margin-bottom: 0.5rem;">Department</label>
                    <input type="text" name="department" id="department" value="{{ old('department', $employee->department) }}" required style="width: 100%; padding: 0.5rem; border: 1px solid #ddd; border-radius: 4px;">
                </div>

                <div style="margin-bottom: 1.5rem;">
                    <label for="staff_type" style="display: block; margin-bottom: 0.5rem;">Staff Type</label>
                    <select name="staff_type" id="staff_type" style="width: 100%; padding: 0.5rem; border: 1px solid #ddd; border-radius: 4px;">
                        <option value="Permanent" {{ $employee->staff_type == 'Permanent' ? 'selected' : '' }}>Permanent</option>
                        <option value="Temporal" {{ $employee->staff_type == 'Temporal' ? 'selected' : '' }}>Temporal</option>
                    </select>
                </div>

                <button type="submit" style="background-color: #4CAF50; color: white; padding: 0.75rem 1.5rem; border: none; border-radius: 4px; cursor: pointer; font-size: 1rem;">
                    Update Employee
                </button>
            </form>

            @if ($errors->any())
                <div style="margin-top: 1rem; color: red;">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </section>
</x-layout>
