你是一名资深 WordPress 主题开发工程师、WooCommerce 模板工程师、Google SEO 技术顾问和 B2B 外贸网站前端设计师。

我要为 buildinglift.com 开发一个新的 WordPress 子主题：

Theme Name:
buildinglift-b2b

主题定位：
B2B 工业品外贸产品展示型主题。

业务方向：
Suspended Working Platform、Suspended Platform Spare Parts、Construction Hoist Spare Parts、Glass Lifting Machine、Electric Scissor Lift、Construction Mini Crane、Tower Crane Parts。

核心目标优先级：
1. Google SEO
2. B2B 产品展示
3. 询盘转化
4. 移动端体验
5. 页面速度
6. 后台可维护性
7. 与 AI SEO GEO Optimizer 插件兼容

本主题不是：
1. 博客主题
2. 零售电商主题
3. SaaS 官网主题
4. 花哨动画主题
5. Elementor 依赖主题

推荐父主题：
GeneratePress

开发方式：
创建 buildinglift-b2b 子主题，不直接修改父主题。

技术限制：
1. 不使用 Composer。
2. 不使用 Bootstrap。
3. 不使用大型 JS 框架。
4. 不使用大型图标库。
5. 不加载 Google Fonts。
6. 不依赖 Elementor。
7. 不硬写 SEO Meta。
8. 不重复输出 Schema。
9. 不修改 WordPress URL 结构。
10. 不修改 WooCommerce 产品 slug、分类 slug、文章 URL。

主题负责：
1. 页面结构
2. H1/H2/H3 层级
3. Header / Footer
4. 首页模块
5. 产品列表页布局
6. 产品详情页布局
7. 普通页面布局
8. 博客详情页布局
9. 搜索页
10. 404 页面
11. 产品卡片
12. 询盘 CTA
13. 图片显示
14. 移动端样式
15. 正文排版

主题不负责：
1. Meta Title
2. Meta Description
3. Canonical
4. Open Graph
5. XML Sitemap
6. Robots
7. Product Schema
8. Article Schema
9. FAQ Schema

这些功能交给 Yoast、Rank Math 或 AI SEO GEO Optimizer 插件。

H 标签规则：
1. 每个页面最终前台只允许一个 H1。
2. H1 由主题模板统一输出。
3. 后台正文内容从 H2 开始。
4. AI SEO GEO Optimizer 插件生成正文不得包含 H1。
5. Logo、Footer、Sidebar、CTA 不得使用 H1。
6. 首页模块标题使用 H2。
7. 产品卡片标题使用 H3。
8. 产品详情页 H1 = 产品标题。
9. 产品分类页 H1 = 分类名称。
10. 博客详情页 H1 = 文章标题。

后台可维护规则：
1. Header 菜单必须使用 WordPress menu system。
2. Footer 菜单必须使用 WordPress menu system。
3. Products、Applications、Resources 支持后台菜单配置。
4. 没有菜单时显示 fallback。
5. Logo、Email、WhatsApp、Address、CTA URL 不要全部硬编码。
6. 提供安全 fallback。
7. Footer 联系信息可配置。

WooCommerce 规则：
1. 优先使用 WooCommerce hooks。
2. 只有确实需要改变结构时才覆盖 WooCommerce 模板。
3. 不删除 WooCommerce 核心 hooks。
4. 不破坏 WooCommerce pagination。
5. 不破坏产品图片、图库、属性、分类、标签。
6. 不强制显示价格。
7. Request Quote 是主 CTA。
8. Add to Cart 可配置显示或隐藏。
9. 无价格时不显示空价格区域。

产品详情字段来源：
1. H1 = product title
2. 主图 = featured image
3. 图库 = product gallery
4. 短描述 = post_excerpt
5. 长描述 = post_content
6. 参数表 = product attributes
7. 分类 = product_cat
8. 标签 = product_tag
9. 相关产品 = WooCommerce related products

空模块规则：
1. 没有内容，不输出模块标题。
2. 没有产品，不输出 Featured Products 空区域。
3. 没有参数，不输出空参数表。
4. 没有 FAQ，不输出 FAQ 标题。
5. 没有相关产品，不输出 Related Products 标题。
6. 不输出空 div、空 section、空 table。

首页结构：
1. Top Bar
2. Header Logo + Navigation
3. Hero Banner Carousel
4. Product Categories
5. Featured Products
6. About / Why BuildingLift
7. Applications
8. Solutions & Safety Support
9. Spare Parts Support
10. Videos / Resources
11. FAQ
12. Inquiry CTA
13. Footer

Header 导航结构：
Home

Products
- Suspended Working Platform
- Suspended Platform Spare Parts
- Construction Hoist Spare Parts
- Glass Lifting Machine
- Electric Scissor Lift
- Construction Mini Crane
- Tower Crane Parts

Applications
- Building Facade Work
- Window Cleaning
- Exterior Wall Maintenance
- Glass Installation
- Indoor Maintenance
- Construction Site Lifting

Solutions

Resources
- Blog
- Videos
- Product Use Safety
- FAQ

About Us

Contact Us

首页 Banner 规则：
1. 最多 3 个 slide。
2. 第一张 slide 输出首页唯一 H1。
3. 其他 slide 不能使用 H1。
4. 重要文字必须是 HTML 文本，不要做进图片。
5. 首屏图片不 lazy load。
6. 轮播高度固定，避免 CLS。
7. 不使用大型轮播库。
8. 使用原生 JS。
9. 移动端可以简化为单张 Banner。

首页第一张 Banner H1：
Suspended Working Platform Manufacturer for Construction and Building Maintenance

首页第一张 Banner 副标题：
BuildingLift supplies electric suspended platforms, ZLP suspended platforms, spare parts, glass lifting machines, mini cranes, and scissor lifts for construction and maintenance projects.

首页产品分类：
1. Suspended Working Platform
2. Suspended Platform Spare Parts
3. Construction Hoist Spare Parts
4. Glass Lifting Machine
5. Electric Scissor Lift
6. Construction Mini Crane

首页应用场景：
1. Building Facade Work
2. Window Cleaning
3. Exterior Wall Maintenance
4. Glass Curtain Wall Installation
5. Indoor Maintenance
6. Construction Site Lifting

Footer 分栏：
Products
Applications
Resources
Company
Contact

Tag 页面策略：
1. tag.php 第一版不重点开发。
2. tag archive 使用 archive.php fallback。
3. product_tag 不加入主导航。
4. 建议 SEO 插件设置 noindex, follow。
5. 搜索页 search.php 必须完整开发。
6. 404.php 必须有产品入口、搜索框和联系入口。

前端风格：
B2B industrial product showcase style。

视觉要求：
1. 专业
2. 清晰
3. 可信
4. 产品导向
5. 询盘导向
6. 工业品风格
7. 不花哨
8. 不做博客杂志风
9. 不做零售电商促销风
10. 不做 SaaS 炫酷风

颜色建议：
1. 主色：深蓝或工业蓝
2. CTA：橙色或黄色
3. 背景：白色和浅灰
4. 文字：深灰
5. 边框：浅灰

布局要求：
1. 最大内容宽度 1200px。
2. 桌面产品列表 3 或 4 列。
3. 平板 2 列。
4. 手机 1 列。
5. 移动端按钮高度不低于 44px。
6. 表格移动端横向滚动。

图片规则：
1. 优先使用 WordPress attachment alt。
2. alt 为空时 fallback 到产品标题或文章标题。
3. 不自动堆砌关键词。
4. 使用 WordPress responsive image。
5. 产品卡片图比例统一。
6. 图片不能拉伸变形。
7. 首屏主图不 lazy load。
8. 非首屏图片 lazy load。

性能要求：
1. 不使用 Bootstrap。
2. 不使用大型 JS 框架。
3. 不使用大型图标库。
4. 不加载 Google Fonts。
5. CSS 按页面类型加载。
6. JS 轻量。
7. 避免 CLS。
8. 减少无用 CSS。
9. 不依赖 JS 显示核心 SEO 内容。

可访问性要求：
1. 导航可键盘访问。
2. 移动菜单按钮有 aria-label。
3. 轮播按钮有 aria-label。
4. 链接和按钮有可见文本。
5. 图片 alt 合理。
6. 表单字段有 label。
7. focus 状态清晰。
8. 颜色对比度足够。

安全和编码规范：
1. 动态文本使用 esc_html。
2. URL 使用 esc_url。
3. 属性使用 esc_attr。
4. 正文 HTML 使用 wp_kses_post。
5. 主题字符串可翻译。
6. text domain 使用 buildinglift-b2b。
7. 不直接输出未清理的 option。
8. 不直接信任自定义字段。
9. 遵守 WordPress Coding Standards。

上线规则：
1. 不修改 permalink。
2. 不修改产品 slug。
3. 不修改分类 slug。
4. 不自动创建 301。
5. 不改变现有文章、页面、产品 URL。
6. 必须先在 staging 测试。
