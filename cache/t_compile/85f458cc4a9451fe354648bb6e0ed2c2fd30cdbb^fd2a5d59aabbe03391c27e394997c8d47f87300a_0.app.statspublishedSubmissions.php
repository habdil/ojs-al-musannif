<?php
/* Smarty version 3.1.33, created on 2025-09-05 07:14:19
  from 'app:statspublishedSubmissions' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_68ba8dcb6d9019_48907125',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd2a5d59aabbe03391c27e394997c8d47f87300a' => 
    array (
      0 => 'app:statspublishedSubmissions',
      1 => 1551386984,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:common/header.tpl' => 1,
    'app:common/footer.tpl' => 1,
  ),
),false)) {
function content_68ba8dcb6d9019_48907125 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("app:common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('suppressPageTitle'=>true), 0, false);
?>

<div class="pkp_page_content">
	<?php $_smarty_tpl->_assignInScope('uuid', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( uniqid('') )));?>
	<div id="article-stats-handler-<?php echo $_smarty_tpl->tpl_vars['uuid']->value;?>
" class="pkpStatistics">
		<page-header>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.publishedSubmissions"),$_smarty_tpl ) );?>

			<span v-if="isLoading" class="pkpSpinner" aria-hidden="true"></span>
			<template slot="actions">
				<date-range
					unique-id="article-stats-date-range"
					:date-start="dateStart"
					:date-end="dateEnd"
					:date-end-max="dateEndMax"
					:options="dateRangeOptions"
					:i18n="i18n"
					@set-range="setDateRange"
				></date-range>
				<pkp-button
					v-if="hasFilters"
					:label="i18n.filter"
					icon="filter"
					:is-active="isFilterVisible"
					@click="toggleFilter"
				></pkp-button>
			</template>
		</page-header>
		<div class="pkpStatistics__container">
			<list-panel-filter
				v-if="hasFilters"
				:is-visible="isFilterVisible"
				:filters="filters"
				:active-filters="activeFilters"
				:i18n="i18n"
				@filter-list="updateFilter"
			></list-panel-filter>
			<div class="pkpStatistics__main">
				<div v-if="chartData" class="pkpStatistics__graph">
					<div class="pkpStatistics__graphHeader">
						<h2 class="pkpStatistics__graphTitle" id="article-stats-time-segment">Abstract Views</h2>
						<div class="pkpStatistics__graphSegment">
							<pkp-button
								:label="i18n.day"
								:aria-pressed="timeSegment === 'day'"
								aria-describedby="article-stats-time-segment"
								:disabled="!isDailySegmentEnabled"
								@click="setTimeSegment('day')"
							></pkp-button>
							<pkp-button
								:label="i18n.month"
								:aria-pressed="timeSegment === 'month'"
								aria-describedby="article-stats-time-segment"
								:disabled="!isMonthlySegmentEnabled"
								@click="setTimeSegment('month')"
							></pkp-button>
						</div>
					</div>
					<table class="-screenReader" role="region" aria-live="polite">
						<caption><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"stats.publishedSubmissions.totalAbstractViews.timeSegment"),$_smarty_tpl ) );?>
</caption>
						<thead>
							<tr>
								<th scope="col"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.date"),$_smarty_tpl ) );?>
</th>
								<th scope="col"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.abstractViews"),$_smarty_tpl ) );?>
</th>
								<th scope="col"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"stats.fileViews"),$_smarty_tpl ) );?>
</th>
								<th scope="col"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"stats.total"),$_smarty_tpl ) );?>
</th>
							</tr>
						</thead>
						<tbody>
							<tr	v-for="segment in timeSegments">
								<th scope="row">{{ segment.dateLabel }}</th>
								<th>{{ segment.abstractViews }}</th>
								<th>{{ segment.totalFileViews }}</th>
								<th>{{ segment.total }}</th>
							</tr>
						</tbody>
					</table>
					<line-chart :chart-data="chartData" aria-hidden="true"></line-chart>
				</div>
				<div class="pkpStatistics__table" role="region" aria-live="polite">
					<div class="pkpStatistics__tableHeader">
						<h2 class="pkpStatistics__tableTitle" id="articleDetailTableLabel">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"stats.publishedSubmissions.details"),$_smarty_tpl ) );?>

							<span v-if="isLoading" class="pkpSpinner" aria-hidden="true"></span>
						</h2>
						<div class="pkpStatistics__tableActions">
							<div class="pkpStatistics__itemsOfTotal">
								{{ __('itemsOfTotal', { count: items.length, total: itemsMax }) }}
								<a
									v-if="items.length < itemsMax"
									href="#articleDetailTablePagination"
									class="-screenReader"
								>
									{{ i18n.paginationLabel }}
								</a>
							</div>
						</div>
					</div>
					<pkp-table
						labelled-by="articleDetailTableLabel"
						:columns="tableColumns"
						:rows="items"
						:order-by="orderBy"
						:order-direction="orderDirection"
						@order-by="setOrderBy"
					>
						<list-panel-search
							slot="thead-title"
							slot-scope="{ column }"
							:search-phrase="searchPhrase"
							:i18n="i18n"
							@search-phrase-changed="setSearchPhrase"
						></list-panel-search>
						<template slot-scope="{ row, rowIndex }">
							<table-cell
							 	v-for="(column, columnIndex) in tableColumns"
								:key="column.name"
								:column="column"
								:row="row"
								:tabindex="!rowIndex && !columnIndex ? 0 : -1"
							>
								<template v-if="column.name === 'title'">
									<a
										:href="row.object.urlPublished"
										class="pkpStatistics__itemLink"
										target="_blank"
									>
										<span class="pkpStatistics__itemAuthors" v-html="row.object.shortAuthorString"></span>
										<span class="pkpStatistics__itemTitle" v-html="row.object.fullTitle.en_US"></span>
									</a>
								</template>
							</table-cell>
						</template>
					</pkp-table>
					<pagination
						v-if="lastPage > 1"
						id="articleDetailTablePagination"
						:current-page="currentPage"
						:last-page="lastPage"
						:i18n="i18n"
						@set-page="setPage"
					></pagination>
					<div v-if="!items.length" class="pkpStatistics__noRecords">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"stats.publishedSubmissions.none"),$_smarty_tpl ) );?>

					</div>
				</div>
			</div>
		</div>
	</div>
	<?php echo '<script'; ?>
 type="text/javascript">
		pkp.registry.init('article-stats-handler-<?php echo $_smarty_tpl->tpl_vars['uuid']->value;?>
', 'Statistics', <?php echo json_encode($_smarty_tpl->tpl_vars['statsComponent']->value->getConfig());?>
);
	<?php echo '</script'; ?>
>
</div>

<?php $_smarty_tpl->_subTemplateRender("app:common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
