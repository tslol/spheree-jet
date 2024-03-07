<div class="stats stats-vertical">

        <div class="stat">
            <div class="stat-title">Total Reviews</div>
            <div class="stat-value">
                {{ $reviews->count() }}
            </div>
            <div class="stat-desc">
                <span class="badge bg-green-300">
                    {{ $reviews->count() > 0 ? '+' : '-' }}
                    {{ $reviews->count() * 100 }}%
            </div>
          </div>

          <div class="stat">
              <div class="stat-title">Total Ratings</div>
              <div class="stat-value">{{ $avgRating }}</div>
              <div class="stat-desc">No Change from last month</div>
            </div>

</div>
